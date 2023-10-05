<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <link rel="stylesheet" href="style.css">
    <style>table, th, td {
    border: 1px solid black;
   
    }</style>

</head>
<body>

<div class="container">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted
    $rollno = $_POST["rollno"];
    
    $human = isset($_POST["human"]) ? $_POST["human"] : "";

    if ($human == "yes") {
        
        $servername = "localhost";
        $username = "root";
        $password = "123456";
        $dbname = "sakshidb";

        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "SELECT S.ROLLNO as rollno, S.NAME as name, 
                S.DOB  as dob, S.FATHERSNAME as fathersname, SB.MATHS as maths, SB.ENGLISH as english, SB.PHYSICS as physics, SB.CHEMISTRY as chemistry, SB.BIOLOGY as bio
                FROM STUDENTS AS S
                JOIN
                SUBJECTS AS SB
                ON 
                S.ROLLNO = SB.ROLLNO
                WHERE S.ROLLNO = $rollno";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            echo "<p>Passing Marks: 35 </p>";
            echo "<p>Total Marks: 100 </p>";
            echo "<table>
                   <tr>
                      <th>Roll No</th>
                      <th>Name</th>
                      <th>DOB</th>
                      <th>Father's Name</th>
                      <th>Maths</th>
                      <th>English</th>
                      <th>Physics</th>
                      <th>Chemistry</th>
                      <th>Biology</th>
                      <th> Total Marks</th>
                    </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td> " . $row["rollno"]. "</td>
                        <td> " . $row["name"]. "</td>
                        <td> " . $row["dob"]. "</td>
                        <td> " . $row["fathersname"]. "</td>
                        <td> " . $row["maths"]. "</td>
                        <td> " . $row["english"]. "</td>
                        <td> " . $row["physics"]. "</td>
                        <td> " . $row["chemistry"]."</td>
                        <td> " . $row["bio"]. "</td>
                        <td> " . $row["maths"] + $row["english"] + $row["physics"] + $row["chemistry"] + $row["bio"]. "</td>
                      </tr>";
            }
            
            echo "</table>";
        } 
        else {
            echo "ROll Number doesn't exists...";
        }

        $conn->close();
    }
    else {
        echo "Please check the 'human' box to proceed.";
    }
}
?>

</div>
    
</body>
</html>

