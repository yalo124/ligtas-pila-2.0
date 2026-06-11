<?php
header('Content-Type: application/json');
error_reporting(0); 
ini_set('display_errors', 0);

//database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ligtas_pila_database";
$port = 3307;

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    echo json_encode(["found" => false, "error" => "Database connection failed: " . mysqli_connect_error()]);
    exit();
}

if (!isset($_POST["id"])) {
    echo json_encode(["found" => false, "error" => "No ID provided"]);
    exit();
}

$id = $_POST["id"];

$sql = "SELECT * FROM `information_list` WHERE `Number ID` = ?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo json_encode(["found" => false, "error" => mysqli_error($conn)]);
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo json_encode(["found" => false]);
    exit();
}

//for validition, this options are eligible
$income = $row["MONTHLY_INCOME"];
$eligibleIncomes = [
    "No income",
    "Less than PhP 12,000 per month",
    "Between PhP 12,000 to PhP 24,000 per month",
    "Between PhP 24,000 to PhP 48,000 per month"
];
$B = in_array($income, $eligibleIncomes);


$kondition = $row["CASE_TYPE"]; 
$konditionArray = explode(", ", $kondition);

//variables for the logical equivalence
$C = in_array("unemployed", $konditionArray);
$D = in_array("Transport Worker", $konditionArray);
$E = in_array("Natural Disaster Victims", $konditionArray);
$F = in_array("Senior Citizen", $konditionArray);
$G = in_array("PWD", $konditionArray);
$H = in_array("Medical Assistance", $konditionArray);
$I = in_array("Educational Assistance", $konditionArray);
$J = in_array("Burial Assistance", $konditionArray);

$aid = [];
$conditions = [];

//distribution law
if($B && ($C||$D||$E||$F||$G||$H||$I||$J)){

    if($C) $conditions[] = "Unemployed";
    if($D) $conditions[] = "Transport Worker";
    if($E) $conditions[] = "Natural Disaster Victims";
    if($F) $conditions[] = "Senior Citizen";
    if($G) $conditions[] = "PWD";
    if($H) $conditions[] = "Medical Assistance";
    if($I) $conditions[] = "Educational Assistance";
    if($J) $conditions[] = "Burial Assistance";

    //responses
    if($B && $C) $aid[] = "Registration Confirmed. We will help you on your selected assistance. Our program is committed to helping you access services and opportunities that may support your immediate needs and improve your overall quality of life.A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions";
    if($B && $D) $aid[] = "Registration Confirmed. We will help you on your selected assistance. This service aims to connect you with available assistance programs and support services for transport workers. A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions.";
    if($B && $E) $aid[] = "Registration Confirmed. This program aims to connect you with emergency assistance and recovery support to help address your immediate needs.A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions.";
    if($B && $F) $aid[] = "Registration Confirmed. This program is designed to connect you with services, benefits, and support systems for senior citizens.A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions.";
    if($B && $G) $aid[] = "Registration Confirmed. We will help you on your selected assistance. This service is designed to connect you with accessible assistance programs and support services that match your needs.A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions.";
    if($B && $H) $aid[] = "Registration Confirmed. We will help you on your selected assistance. This program aims to connect you with available healthcare assistance and financial support programs.A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions.";
    if($B && $I) $aid[] = "Registration Confirmed. We will help you on your selected assistance. This program aims to connect you with educational assistance programs and learning opportunities that support your studies. A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions.";
    if($B && $J) $aid[] = "Registration Confirmed. We will help you on your selected assistance. This service aims to connect you with available burial assistance programs to support you during this difficult time.A personel from Ligtas-Pila will contact you through your provided contact information for updates and further instructions.
";
}

$response = [];

//response activated if the status is complete
if($row["STATUS"] === "Completed") {
    if($B && ($C||$D||$E||$F||$G||$H||$I||$J)) {
        $response = $aid;
    } else {
        $response = ["You are not eligible"];
    }
} else if($row["STATUS"] === "Processing") {
    $response = ["Your application is still being processed. Current status: " . $row["Status"] . ". Please check back later."];
} else{
    $response = ["Your application has been submitted. Please wait for any changes."];
}

if (empty($conditions)) {
    $conditions[] = $kondition; 
}

echo json_encode([
    "found" => true,
    "name" => $row["FIRST_NAME"] . " " . $row["LAST_NAME"],
    "status" => $row["STATUS"],
    "condition" => $conditions,
    "response" => $response
]);

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>