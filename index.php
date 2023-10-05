<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>XYZ COLlEGE</h1>
<h2>Student Result</h2>
<form action="result.php" method="post">
    <label for="rollno"><h3>Enter Your Rollno :</h3></label>
    <input type="text" name="rollno">
    <br><br>

    <label for="">Check if you are human...</label>
    <input type="radio" name="human" value="yes"> Yes
    <input type="radio" name="human" value="no"> No
    <br><br>

    <input type="submit" value="Submit">
</form>

</div>

</body>
</html>
