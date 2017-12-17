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
<h1>Edit Todos</h1>
<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h2>Hello <?=$user_data->fname?></h2>
								
<ul><h2>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
<br>
</ul></h2>
<br>
<br>
<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">
	Title: <input type="text" name="title" id="title" value="<?php echo $data->title; ?>" required><br><br>
	Body: <textarea rows="10" cols="50"; name="body" id="body" required><?php echo $data->body; ?></textarea><br><br>
	Is Done: <input type="checkbox" name="isdone" id="isdone" value="1" <?php if($data->isdone == '1'){echo 'checked="checked"';}?>>
	<input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>"> <br><br>
    <input type="submit" value="Submit form">
</form>
<br>
<h3><a href="index.php?page=tasks&action=all">Back</a></h3>
<script src="js/scripts.js"></script>
</body>
</html>