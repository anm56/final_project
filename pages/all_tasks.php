<!doctype html>

<html lang="en">
<style>
li {
    float: left;
    padding: 16px;
    list-style: none;
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
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?></h1>
<h2>All Todos</h2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); ?>

<h3>Hello <?=$user_data->fname?></h3>

<ul><h2>
<li><a href="index.php?page=accounts&action=all">My Account</a></li>
<li><a href="index.php?page=tasks&action=create">Add Todos</a></li>
<li><a href="index.php?page=accounts&action=logout">Logout</a></li>
<br>
<br>
</ul></h2>

<?php
//this is how you print something
if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data);
} else {
	echo 'Data not found';
}
?>

<script src="js/scripts.js"></script>
</body>
</html>