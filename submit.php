<?php
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$gender = $_POST['gender'] ?? '';
$country = $_POST['country'] ?? '';
$address = $_POST['address'] ?? '';

$hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "No hobbies selected";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Submitted Details</title>

<style>
body{
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    margin: 0;
    padding: 30px;
}

.container{
    background: #ffffff;
    max-width: 700px;
    margin: 30px auto;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0px 0px 12px rgba(0,0,0,0.2);
}

h1{
    text-align: center;
    font-size: 30px;
    color: #333;
    margin-bottom: 25px;
}

.data-box{
    margin-bottom: 15px;
    background: #fafafa;
    padding: 15px;
    border-left: 5px solid #4caf50;
    border-radius: 5px;
}

.data-box b{
    color: #333;
}

a.home-btn{
    display: inline-block;
    background: #4caf50;
    color: white;
    padding: 12px 20px;
    font-size: 18px;
    border-radius: 6px;
    text-decoration: none;
    margin-top: 20px;
}

a.home-btn:hover{
    background: #45a049;
}
</style>

</head>
<body>

<div class="container">
<h1>Registration Details</h1>

<div class="data-box"><b>First Name:</b> <?php echo $firstname; ?></div>
<div class="data-box"><b>Last Name:</b> <?php echo $lastname; ?></div>
<div class="data-box"><b>Email:</b> <?php echo $email; ?></div>
<div class="data-box"><b>Password:</b> <?php echo $password; ?></div>
<div class="data-box"><b>Gender:</b> <?php echo $gender; ?></div>
<div class="data-box"><b>Country:</b> <?php echo $country; ?></div>
<div class="data-box"><b>Hobbies:</b> <?php echo $hobbies; ?></div>
<div class="data-box"><b>Address:</b> <?php echo nl2br($address); ?></div>

<center>
    <a class="home-btn" href="form.html">Fill Another Form</a>
</center>

</div>

</body>
</html>
