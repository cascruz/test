<?php
// store shared information in this file, such as headers, menu, and footers

//HTML Header
$HTMLHeader = 
"<!DOCTYPE html>
<html>
<head>
	<title>CTEC4321 Code Example</title>
	<link rel='stylesheet' href='INSERT CSS FILE LINK'>
</head>
<body>
";

//Course identifier
$course = "<div class='course'>CTEC 4321 Code Example</div>";

// Page title
$SubTitle_Admin = "<h1>Product Catalog Management</h1>";

// Product Admin Nav
$admin_nav = "<nav class='flexboxContainer'><div>
                <div class='buttonBox'><a href='admin_form.php'><span class='button'>+</span> Add a new item</a></div>
                <div class='buttonBox'><a href='admin_productList.php'><span class='button'> ./ </span> List all items</a></div>
              </div></nav>
                ";

//Page Footer
$PageFooter = "
<footer>
	<a href='http://cyjang.utasites.cloud/ctec4321/'>Back to the course site</a>
</footer>
";
?>

Other pages:
<?php
// acquire shared info from other files
include("dbconn.inc.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

// make database connection
$conn = dbConnect();

?>
<?php 
	print $HTMLHeader; 
	print $course;
?>
<header>
	<h1><?= $SubTitle_Admin ?></h1>
</header>
