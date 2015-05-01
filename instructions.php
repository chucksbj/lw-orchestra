<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
<?php
session_start();
$images = $_SESSION['images'];
$orient = $_GET['orient'];
$iter = "$_GET[iter]";
$dbname = "$_GET[dbname]";
$titl = "$_GET[title]";
$title = rawurldecode($titl);
$letter = "$_GET[letter]";
$iter = "$_GET[iter]";
$inext = "$_GET[inext]";
?>
    <title>Living Word Orchestra Music</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="brsdet.js"></script>

</head>
<?php
//Page orientation determination
$orient = $_GET['orient'];
if ($orient == "horiz")
{
echo "<div id='wrap'>";
}
elseif ($orient == "vertical")
{
echo "<div id='nowrap'>";
}
else
{
echo "<div id='nowrap'>";
}
?>
 <body>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-body">


<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-tl"></div>
    <div class="art-block-tr"></div>
    <div class="art-block-bl"></div>
    <div class="art-block-br"></div>
    <div class="art-block-tc"></div>
    <div class="art-block-bc"></div>
    <div class="art-block-cl"></div>
    <div class="art-block-cr"></div>
    <div class="art-block-cc"></div>
    <div class="art-block-body">

                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

	<h1 class='t'>Editor Instruction Page</h1>
	<h3 class='t'>To Get to the Editor:</h3>
	<h4 class='t'>To get to the editor, simply click on the "Edit" link to the right of the song title.</h4>
	<img src="instructions images/edit.png" alt="Edit" width="990" height="75">
	<h4 class='t'>After clicking "Edit" you will be required to log in with the information provided.</h4>
	<img src="instructions images/login.png" alt="Login">
	<h4 class='t'>Once in the editor, you will see the following icons. This will cover the important tools.</h4>
	<img src="instructions images/edit_toolbar.png" alt="Edit"width="990">
	<h4 class='t'><p>This tool-bar contains all functions available in this program. The tabs underneath the tool-bar contain all options available for the particular tool selected, in this case, the line tool.</p></h4>
                        <div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
            <div class="cleared"></div>
            <div class="art-footer">
	<ul class="art-hmenu">
	</ul>
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
<?php
include('footer.php');
?>

                                 
               </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>

</body>
</div>
</html>
