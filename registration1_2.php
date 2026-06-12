<?php

$lastname=$_POST["lastname"] ?? 'N/A';
$fstname=$_POST["fstname"] ?? 'N/A';
$midname=$_POST["midname"] ?? 'N/A';
$suffix=$_POST["suffix"] ?? 'N/A';
$region=$_POST["region"] ?? 'N/A';
$city=$_POST["city"] ?? 'N/A';
$district=$_POST["district"] ?? 'N/A';
$barangay=$_POST["barangay"] ?? 'N/A';
$address=$_POST["address"] ?? 'N/A';
$number=$_POST["number"] ?? 'N/A';
$email=$_POST["email"] ?? 'N/A';
$income=$_POST["income"] ?? 'N/A';
$kondition=isset($_POST["kondition"]) 
            ? implode(", ", (array)$_POST["kondition"]) 
            : "N/A";
$id = $_POST["id"];
$formstatus = "Pending";
//assistance
$assistance = $_POST["assistance"]  ?? 'N/A';
//specific assistance
$specific_assistance = $_POST["specific_assistance"]  ?? 'N/A';
//others
$otherParent = $_POST["other_input_parent"]  ?? 'N/A';
$otherChild = $_POST["other_input_child"]  ?? 'N/A';
//disaster 
$disastertype = $_POST["disastertype"]  ?? 'N/A';
$disastermembers = $_POST["members"]  ?? 'N/A';
//senior
$seniorstatus = $_POST["status"]  ?? 'N/A';
$seniormedicalcondition = $_POST["seniormedicalcoditions"]  ?? 'N/A';
//pwd
$pwdtype= $_POST["pwithd"]  ?? 'N/A';
$pwdcase=$_POST["pwdcase"]  ?? 'N/A';
//medical devices
$medical_device = $_POST["assistive_devices"]  ?? 'N/A';
//student loan
$student_loan = $_POST["loanamount"]  ?? 'N/A';

// medical bill_image 
$filePath_bill = "N/A";
if(!empty($_FILES["bill_image"]["name"])){
    if($_FILES["bill_image"]["error"] !== UPLOAD_ERR_OK){
        exit("Bill image upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["bill_image"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["bill_image"]["name"]);
    $base = $pathinfo["filename"];
    $filename_bill = $_FILES["bill_image"]["name"];
    $uploadDir = __DIR__ . "/uploads/medical/bill/";
    $destination = $uploadDir . $filename_bill;
    $i = 1;
    while(file_exists($destination)){
        $filename_bill = $base . "($i)." . $pathinfo["extension"];
        $destination = $uploadDir . $filename_bill;
        $i++;
    }
    if(!move_uploaded_file($_FILES["bill_image"]["tmp_name"], $destination)){
        exit("Cant move uploaded file");
    }
    $filePath_bill = "uploads/medical/bill/" . $filename_bill;
}

// medicine_image
$filePath_medicine = "N/A";
if(!empty($_FILES["medicine_image"]["name"])){
    if($_FILES["medicine_image"]["error"] !== UPLOAD_ERR_OK){
        exit("Medicine image upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["medicine_image"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["medicine_image"]["name"]);
    $base = $pathinfo["filename"];
    $filename_medicine = $_FILES["medicine_image"]["name"];
    $uploadDir = __DIR__ . "/uploads/medical/medicine/";
    $destination = $uploadDir . $filename_medicine;
    $i = 1;
    while(file_exists($destination)){
        $filename_medicine = $base . "($i)." . $pathinfo["extension"];
        $destination = $uploadDir . $filename_medicine;
        $i++;
    }
    if(!move_uploaded_file($_FILES["medicine_image"]["tmp_name"], $destination)){
        exit("Cant move uploaded file");
    }
    $filePath_medicine = "uploads/medical/medicine/" . $filename_medicine;
}

// cash_image
$filePath_cash = "N/A";
if(!empty($_FILES["cash_image"]["name"])){
    if($_FILES["cash_image"]["error"] !== UPLOAD_ERR_OK){
        exit("Cash image upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["cash_image"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["cash_image"]["name"]);
    $base = $pathinfo["filename"];
    $filename_cash = $_FILES["cash_image"]["name"];
    $uploadDir = __DIR__ . "/uploads/medical/cash/";
    $destination = $uploadDir . $filename_cash;
    $i = 1;
    while(file_exists($destination)){
        $filename_cash = $base . "($i)." . $pathinfo["extension"];
        $destination = $uploadDir . $filename_cash;
        $i++;
    }
    if(!move_uploaded_file($_FILES["cash_image"]["tmp_name"], $destination)){
        exit("Cant move uploaded file");
    }
    $filePath_cash = "uploads/medical/cash/" . $filename_cash;
}

// equipment_image 
$filePath_equipment = "N/A";
if(!empty($_FILES["equipment_image"]["name"])){
    if($_FILES["equipment_image"]["error"] !== UPLOAD_ERR_OK){
        exit("Equipment image upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["equipment_image"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["equipment_image"]["name"]);
    $base = $pathinfo["filename"];
    $filename_equipment = $_FILES["equipment_image"]["name"];
    $uploadDir = __DIR__ . "/uploads/medical/equipment prescription/";
    $destination = $uploadDir . $filename_equipment;
    $i = 1;
    while(file_exists($destination)){
        $filename_equipment = $base . "($i)." . $pathinfo["extension"];
        $destination = $uploadDir . $filename_equipment;
        $i++;
    }
    if(!move_uploaded_file($_FILES["equipment_image"]["tmp_name"], $destination)){
        exit("Cant move uploaded file");
    }
    $filePath_equipment = "uploads/medical/equipment prescription/" . $filename_equipment;
}

// combine all medical images into one
$filePath_image = $filePath_bill !== "N/A" ? $filePath_bill :
                 ($filePath_medicine !== "N/A" ? $filePath_medicine :
                 ($filePath_cash !== "N/A" ? $filePath_cash :
                 ($filePath_equipment !== "N/A" ? $filePath_equipment : "N/A")));

// tuition_image
$filePath_tuition = "N/A";
if(!empty($_FILES["tuition_image"]["name"])){
    if($_FILES["tuition_image"]["error"] !== UPLOAD_ERR_OK){
        exit("Tuition image upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["tuition_image"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["tuition_image"]["name"]);
    $base = $pathinfo["filename"];
    $filename_tuition = $_FILES["tuition_image"]["name"];
    $uploadDir = __DIR__ . "/uploads/education/";
    $destination = $uploadDir . $filename_tuition;
    $i = 1;
    while(file_exists($destination)){
        $filename_tuition = $base . "($i)." . $pathinfo["extension"];
        $destination = $uploadDir . $filename_tuition;
        $i++;
    }
    if(!move_uploaded_file($_FILES["tuition_image"]["tmp_name"], $destination)){
        exit("Cant move uploaded file");
    }
    $filePath_tuition = "uploads/education/" . $filename_tuition;
}

// supplies_image 
$filePath_supplies = "N/A";
if(!empty($_FILES["supplies_image"]["name"])){
    if($_FILES["supplies_image"]["error"] !== UPLOAD_ERR_OK){
        exit("Supplies image upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["supplies_image"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["supplies_image"]["name"]);
    $base = $pathinfo["filename"];
    $filename_supplies = $_FILES["supplies_image"]["name"];
    $uploadDir = __DIR__ . "/uploads/education/";
    $destination = $uploadDir . $filename_supplies;
    $i = 1;
    while(file_exists($destination)){
        $filename_supplies = $base . "($i)." . $pathinfo["extension"];
        $destination = $uploadDir . $filename_supplies;
        $i++;
    }
    if(!move_uploaded_file($_FILES["supplies_image"]["tmp_name"], $destination)){
        exit("Cant move uploaded file");
    }
    $filePath_supplies = "uploads/education/" . $filename_supplies;
}

// combine education images into one
$filePath_emage = $filePath_tuition !== "N/A" ? $filePath_tuition :
                 ($filePath_supplies !== "N/A" ? $filePath_supplies : "N/A");

// (valid ID) 
$filePath_eamage = "N/A";
if(!empty($_FILES["eamage"]["name"])){
    if($_FILES["eamage"]["error"] !== UPLOAD_ERR_OK){
        exit("ID image upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["eamage"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["eamage"]["name"]);
    $base = $pathinfo["filename"];
    $filename_eamage = $_FILES["eamage"]["name"];
    $uploadDir = __DIR__ . "/uploads/id/";
    $destination_eamage = $uploadDir . $filename_eamage;
    $i = 1;
    while(file_exists($destination_eamage)){
        $filename_eamage = $base . "($i)." . $pathinfo["extension"];
        $destination_eamage = $uploadDir . $filename_eamage;
        $i++;
    }
    if(!move_uploaded_file($_FILES["eamage"]["tmp_name"], $destination_eamage)){
        exit("Cant move uploaded file");
    }
    $filePath_eamage = "uploads/id/" . $filename_eamage;
}

//certificate-image
$filePath_death = "N/A";
if(!empty($_FILES["certificate-image"]["name"])){
    if($_FILES["certificate-image"]["error"] !== UPLOAD_ERR_OK){
        exit("Death certificate upload error");
    }
    $mime_types = ["image/png", "image/jpeg"];
    if(!in_array($_FILES["certificate-image"]["type"], $mime_types)){
        exit("Invalid file type");
    }
    $pathinfo = pathinfo($_FILES["certificate-image"]["name"]);
    $base = $pathinfo["filename"];
    $filename_certificate_image = $_FILES["certificate-image"]["name"];
    $uploadDir = __DIR__ . "/uploads/burial/";
    $destination_certificate_image = $uploadDir . $filename_certificate_image;
    $i = 1;
    while(file_exists($destination_certificate_image)){
        $filename_certificate_image = $base . "($i)." . $pathinfo["extension"];
        $destination_certificate_image = $uploadDir . $filename_certificate_image;
        $i++;
    }
    if(!move_uploaded_file($_FILES["certificate-image"]["tmp_name"], $destination_certificate_image)){
        exit("Cant move uploaded file");
    }
    $filePath_death = "uploads/burial/" . $filename_certificate_image;
}


//connection to the database 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ligtas_pila_database";
$port = 3307;

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

//inserting the data received to the database
if(mysqli_connect_errno()){
    die("connect error: " . mysqli_connect_errno());
}

$sql = "INSERT INTO `information_list`(`LAST_NAME`, `FIRST_NAME`, `MIDDLE_NAME`, `SUFFIX`, `REGION`, `CITY`, `DISTRICT`, `BARANGAY`, `CURRENT_ADDRESS`, `NUMBER`, `EMAIL`, `MONTHLY_INCOME`, `CASE_TYPE`, `ID`, `ID FILE NAME`, `STATUS`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
$stmt,
"ssssssssssssssss",
$lastname,
$fstname,
$midname,
$suffix,
$region,
$city,
$district,
$barangay,
$address,
$number,
$email,
$income,
$kondition,
$id,
$filePath_eamage,
$formstatus
);

if(!mysqli_stmt_execute($stmt)){
    die("Execute failed: " . mysqli_stmt_error($stmt));
}


$master_id = mysqli_insert_id($conn);
mysqli_stmt_close($stmt);

//saves information based on what the condition request
switch($kondition){
    case 'unemployed':
      
        $sql = "INSERT INTO `unemployed-table`( `INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) 
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        
        mysqli_stmt_bind_param($stmt, "isssss", $master_id, $kondition, $assistance, $otherParent, $specific_assistance, $otherChild);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;
    
    case 'Transport Worker':
        $sql = "INSERT INTO `transport_worker-table`(`INFO_ID`, `CASE-TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) 
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        mysqli_stmt_bind_param($stmt, "isssss", $master_id, $kondition, $assistance, $otherParent, $specific_assistance, $otherChild);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;
    
    case 'Natural Disaster Victims':
        $sql = "INSERT INTO `natural_disaster_victim-table`(`INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`, `DISASTER`, `No. of Members Affected`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        mysqli_stmt_bind_param($stmt, "isssssss", $master_id, $kondition, $assistance, $otherParent, $specific_assistance, $otherChild, $disastertype, $disastermembers);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;
    
    case 'Senior Citizen':
        $sql = "INSERT INTO `senior_citizen-table`(`INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`, `SENIOR_STATUS`, `SENIOR_MEDICAL_CONDITION`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        mysqli_stmt_bind_param($stmt, "isssssss", $master_id, $kondition, $assistance, $otherParent, $specific_assistance, $otherChild, $seniorstatus, $seniormedicalcondition);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;
    
    case 'PWD':
        $sql = "INSERT INTO `person_with_disability-table`(`INFO_ID`, `CASE_TYPE`,`COMMON ASSISTANCE`, `PWD_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        
        mysqli_stmt_bind_param($stmt, "isssssss", $master_id, $kondition, $assistance, $pwdtype, $pwdcase, $otherParent, $specific_assistance, $otherChild);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;
    
    case 'Medical Assistance':
        $sql = "INSERT INTO `medical-table` (`INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`, `IMAGE`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        mysqli_stmt_bind_param($stmt, "issssss", $master_id, $kondition, $assistance, $otherParent, $specific_assistance, $otherChild, $filePath_image);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;

    case 'Educational Assistance':
        $sql = "INSERT INTO `education-table` (`INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`, `IMAGE`, `LOANS`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        mysqli_stmt_bind_param($stmt, "isssssss", $master_id, $kondition, $assistance, $otherParent, $specific_assistance, $otherChild, $filePath_emage, $student_loan);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;

    case 'Burial Assistance':
        $sql = "INSERT INTO `burial-table` (`INFO_ID`, `CASE_TYPE`, `IMAGE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ die(mysqli_error($conn)); }

        mysqli_stmt_bind_param($stmt, "issssss", $master_id, $kondition, $filePath_death, $assistance, $otherParent, $specific_assistance, $otherChild);
        if(!mysqli_stmt_execute($stmt)){ die("Execute failed: " . mysqli_stmt_error($stmt)); }
    break;
    
    default:
        echo "<p style='color:red'>Unknown type.</p>";
}


mysqli_stmt_close($stmt);
mysqli_close($conn);


header("Location: submit.html?id=" . $master_id);
exit();