<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>LIGTAS-PILA/ADMIN/DATABASE</title>
</head>
<body>

<div class="logo">
    <img src="images/logo.png" alt="logo" class="logoimg">
    <div class="logo-text">
        <span class="LIGTAS">LIGTAS</span><span class="PILA">-PILA</span>
        <br>
        <center><span class="text-bottom">LOGIC-BASED QUEUE ELIMINATION</span></center>
    </div>
</div>
<div class="fullcontainer">
<h3>INFORMATION LIST</h3>
<div class="container">
    <!--columns of name of data-->
    <table>
        <tr>
            <th>Status</th>
            <th>Date</th>
            <th>Number ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Suffix</th>
            <th>Region</th>
            <th>City</th>
            <th>District</th>
            <th>Barangay</th>
            <th>Home Address</th>
            <th>Number</th>
            <th>Email</th>
            <th>Monthly Income</th>
            <th>Case Type</th>
            <th>Valid ID</th>
            <th>ID Image</th>
        </tr>

        <!--connecting to php sql database-->
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `information_list` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>
                            <select class='status-select' data-id='". $row['NUMBER ID'] . "'>
                                <option value='Pending'" . ($row['STATUS'] == 'Pending' ? ' selected' : '') . ">Pending</option>
                                <option value='Processing'" . ($row['STATUS'] == 'Processing' ? ' selected' : '') . ">Processing</option>
                                <option value='Completed'" . ($row['STATUS'] == 'Completed' ? ' selected' : '') . ">Completed</option>
                            </select>
                        </td>
                        <td>". $row["DATE"] ."</td>
                        <td>". $row["NUMBER ID"] ."</td>
                        <td>". $row["LAST_NAME"] ."</td>
                        <td>". $row["FIRST_NAME"] ."</td>
                        <td>". $row["MIDDLE_NAME"] ."</td>
                        <td>". $row["SUFFIX"] ."</td>
                        <td>". $row["REGION"] ."</td>
                        <td>". $row["CITY"] ."</td>
                        <td>". $row["DISTRICT"] ."</td>
                        <td>". $row["BARANGAY"] ."</td>
                        <td>". $row["CURRENT_ADDRESS"] ."</td>
                        <td>". $row["NUMBER"] ."</td>
                        <td>". $row["EMAIL"] ."</td>
                        <td>". $row["MONTHLY_INCOME"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["ID"] ."</td>
                         <td>". $row["ID FILE NAME"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>UNEMPLOYED LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `unemployed-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>TRANSPORT WORKER LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `transport_worker-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE-TYPE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>NATURAL DISASTER VICTIMS LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
            <th>DISASTER</th>
            <th>NO. OF MEMBERS AFFECTED</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `natural_disaster_victim-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                        <td>". $row["DISASTER"] ."</td>
                        <td>". $row["No. of Members Affected"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>SENIOR CITIZEN LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
            <th>SENIOR STATUS</th>
            <th>SENIOR MEDICAL CONDITION</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `senior_citizen-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                        <td>". $row["SENIOR_STATUS"] ."</td>
                        <td>". $row["SENIOR_MEDICAL_CONDITION"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>PERSON WITH DISABILITY LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>COMMON ASSISTANCE</th>
            <th>PWD TYPE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `person_with_disability-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["COMMON ASSISTANCE"] ."</td>
                        <td>". $row["PWD_TYPE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>MEDICAL ASSISTANCE LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>IMAGE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `medical-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["IMAGE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>EDUCATION ASSISTANCE LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>IMAGE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
            <th>LOANS</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `education-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["IMAGE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                         <td>". $row["LOANS"] ."</td>

                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

<h3>BURIAL ASSISTANCE LIST</h3>
<div class="container">
    <table>
        <tr>
            <th>INFO ID</th>
            <th>CASE TYPE</th>
            <th>IMAGE</th>
            <th>ASSISTANCE</th>
            <th>OTHER ASSISTANCE</th>
            <th>AVAILABLE ASSISTANCE</th>
            <th>OTHER AVAILABLE ASSISTANCE</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ligtas_pila_database", 3307);

        $sql = "SELECT * FROM `burial-table` ";
        $result=$conn-> query($sql);

        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){

                //this is for updating the application status
                //the word in the $row should match the column data name in the database 
                echo "<tr> 
                        <td>". $row["INFO_ID"] ."</td>
                        <td>". $row["CASE_TYPE"] ."</td>
                        <td>". $row["IMAGE"] ."</td>
                        <td>". $row["ASSISTANCE"] ."</td>
                        <td>". $row["OTHER"] ."</td>
                        <td>". $row["AVAILABLE ASSISTANCE"] ."</td>
                        <td>". $row["OTHER (A.A.)"] ."</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            "0 result";
        } 
        $conn ->close();
        ?>
    </table>
</div>

</div>
<script src="admin-status.js"></script>   
</body>
</html>