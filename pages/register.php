<!doctype html>
<html lang="en">
<style>
form {
    border: 0px solid #f1f1f1;
}
.container {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-right: 60px;
    margin-left: 10px;
    padding: 16px;
    text-align: center;
    background-color: lightblue;

}

</style>
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<h1 style="color:red;"><center>TO-DO TASK MANAGEMENT</center></h1>
<h2><i><center>Registration</center></i></h2>
<div class= "container">
<form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname" placeholder="First name"required><br><br>
    Last name: <input type="text" name="lname"placeholder="Lastname" required><br><br>
    Email : <input type="email" name="email" placeholder="Username"required><br><br>
    Phone: <input type="tel" name="phone"placeholder="1234567890" required><br><br>
    Birthday: <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br><br>
    Gender: <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Submit form">
</form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
