<?php session_start(); ?>
<html>
<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<style>

body {
	margin: auto;
	height: 500px;
	padding: 20px;
}

#header {
	width: 700px;
	color: maroon;
	font-size: 32px;
	padding: 10px 10px 10px 0px;
	margin-bottom: 15px;
	border-bottom: 1px solid green;
}

#footer {
	border-top: 1px solid green;
	margin-top: 20px;
	color: #336699;
	padding-top: 10px;	
}
</style>

<body>
    <div id="header">
        Welcome to my page!
    </div>
    <?php
    if(isset($_SESSION['valid'])) {			
        include("connection.php");					
        $result = mysqli_query($mysqli, "SELECT * FROM login");
    ?>				
        Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br/>
        <br/>
        <a href='view.php'>View and Add Products</a>
        <br/><br/>
    <?php	
    } else {
        echo "You must be logged in to view this page.<br/><br/>";
        echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
    }
    ?>
    <div id="footer">
        Created by <a href="#?"title="Author">J. Campaner</a>
    </div>
</body>
</html>