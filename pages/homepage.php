<!doctype html>

<html lang="en">
<style>
form {
    border: 0px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 08px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button  {
    background-color: #000098;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
    
}

button:hover {
    opacity: 0.8;
}
.container {
    margin: 0 175px;
    padding: 16px;
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


<h1>
<!--/*<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?></h1>*/-->
<h1 style="color:red;"><center>TO-DO TASK MANAGEMENT </center> </h1>

<h2><center><bold>LogIn</bold></center></h2>

<form action="index.php?page=accounts&action=login" method="POST">
    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
<h2><center>Not registered yet ? <a href="index.php?page=accounts&action=register">Register!</center></a><h2>

<script src="js/scripts.js"></script>
</body>
</html>