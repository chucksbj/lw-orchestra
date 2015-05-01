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
$prevurl = $_SESSION['prevurl'];
$orient = $_GET['orient'];
$iter = $_GET['iter'];
$dbname = $_GET['dbname'];
$lette = $_GET['letter'];
$letter = rawurldecode($lette);
$iter = $_GET['iter'];
$inext = $_GET['inext'];
$letter = rawurldecode($lette);
echo "<meta http-equiv='refresh' content='2;url=$prevurl' />";
?>
    <title>Living Word Orchestra Music</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="brsdet.js"></script>
<script>
var browsername = whichBrs();

if (browsername == "Firefox") {
	document.writeln("<script type='text/javascript' src='dragscrollsa.js'>");
	}
else if (browsername == "Safari") {
	document.writeln("<script type='text/javascript' src='dragscrollsa.js'>");
	}
else {
	document.writeln("<script type='text/javascript' src='dragscroll.js'>");
	}
</script>
</script>


</head>
<?php
//Page orientation determination
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

<?php
$song = "Song List";
$prob = "Problems";
$directory = "./$dbname/$letter/";

if ($letter == $song)
{
 foreach(glob($directory.'*.*') as $v)
{
 unlink($v);
}
 echo "<p><h4 class='t'>All files deleted from the $letter directory.</p></h4>";	
}

elseif ($letter == $prob)
{
 foreach(glob($directory.'*.*') as $v)
{
 unlink($v);
}
 echo "<p><h4 class='t'>All files deleted from the $letter directory.</p></h4>";
}

else
{
echo "<p><h4 class='t'>Sorry, deleting all the songs in the $letter directory is forbidden and an assumed mistake.  If you really do need to delete all the files for a specific letter, please contact Bro. Chuck Bullard Jr. and he can assist you in this.</p></h4>";
}

?>



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
