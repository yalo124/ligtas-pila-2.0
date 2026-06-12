<?php
header('Content-Type: application/json');

//for connect to the database and change status on database
$host = "localhost";
$username = "root";
$password="";
$dbname = "ligtas_pila_database";
$port=3307;

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$conn) {
    echo json_encode(["success" => false, "error" => "Database connection failed"]);
    exit();
}

if(!isset($_POST["id"]) || !isset($_POST["status"])){
    echo json_encode(["success" => false]);
    exit();
}

$id = $_POST["id"];
$status = $_POST["status"];

$allowed = ["Pending", "Processing", "Completed"];
if(!in_array($status, $allowed)){
    echo json_encode(["success" => false, "error" => "Invalid status"]);
    exit();
}

$sql = "UPDATE `information_list` SET `STATUS` = ? WHERE `NUMBER ID` = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "ss", $status, $id);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => "No rows updated. ID may not exist."]);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);


