<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Living Word Orchestra Music</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="brsdet.js"></script>

<script type="text/javascript">
<!--
function processKey(e) {
var evt = e || window.event;
var kc = evt.keyCode;
if (kc==37) {
    var a= document.getElementById('leftarrowkey');
    if (a) location.href = a.href;
     return true;
} else if (kc==39) {
    var a= document.getElementById('rightarrowkey');
    if (a) location.href = a.href;
    return true;
}
return false;
}

document['onkeydown'] = processKey;
// -->
</script>

</head>
<?php
//Page orientation determination
$orient = $_GET['orient'];
if ($orient == "horiz")
{
echo "<div id='wrap'>";
echo "<script type='text/javascript' src='dragscrollsa.js'></script>";
}
elseif ($orient == "vertical")
{
echo "<div id='nowrap'>";
echo "<script type='text/javascript' src='dragscroll.js'></script>";
}
else
{
echo "<div id='nowrap'>";
echo "<script type='text/javascript' src='dragscroll.js'></script>";
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
session_start();
$images = $_SESSION['images'];
$orient = $_GET['orient'];
$iter = "$_GET[iter]";
$dbname = "$_GET[dbname]";
$titl = "$_GET[title]";
$title = rawurldecode($titl);
$letter = "$_GET[letter]";
$inext = "$_GET[inext]";

$prevn = $iter - 1;
$nextn = $iter + 1;
$prev = basename($images[$prevn],".jpg");
$next = basename($images[$nextn],".jpg");

/* Dealing with the JPSs

Using an image map for link to previous and next song over image */
echo "<img style='z-index:10000' src='./$dbname/$letter/";
echo rawurlencode($titl);
echo ".jpg' height='1260px' width='990px' usemap='#image'/>";

/* class='pixastic pixastic-unsharpmask(amount:740,radius:5,threshold:5)'
$imagepath="./$dbname/$letter/$title.jpg";

$image=imagecreatefromjpeg($imagepath);

header('Content-Type: image/jpeg');

imagejpeg($image);

echo "<img src='./images/blank.png' height='1260px' width='990px' usemap='#image'>";
*/
echo "<ol id='bottom-graphics'>";
echo "<li id='lftarrow'><a id='leftarrowkey' href='song_display.php?title=";
echo rawurlencode($prev);
echo "&letter=$letter&dbname=$dbname&iter=$prevn&orient=$orient'><img src='images/Blank.png' width='410px' height='60px'></a></li>";
echo "<li id='prevtxt'>{$prev}</li>";
echo "<li id='backbutton'><a href='songs.php?title=";
echo rawurlencode($title);
echo "&letter=$letter&dbname=$dbname&inext=$inext&orient=$orient'><img src='images/Blank.png' width='90px' height='60px'></a></li>";
echo "<li id='rtarrow'><a id='rightarrowkey' href='song_display.php?title=";
echo rawurlencode($next);
echo "&letter=$letter&dbname=$dbname&iter=$nextn&orient=$orient'><img src='images/Blank.png' width='410px' height='60px'></a></li>";
echo "<li id='nexttxt'>{$next}</li>";
echo "</ol>";
?>
<div class="art-problemheader">
<?php
echo "<h3 class='t'><a href='edit.php?title=";
echo rawurlencode($title);
echo "&letter=$letter&dbname=$dbname&iter=$i&inext=$inext&orient=$orient'><center>Edit '$title'</center></a></h3>";
echo "</br>";
echo "<h3 class='t'><a href='problem.php?letter=$letter&dbname=$dbname&iter=$i&inext=$inext&orient=$orient&title=";
echo rawurlencode($title);
echo "'><center>Add '$title' To Problem List</center></a></h3>";
echo "</br>";
echo "<h3 class='t'><a href='rotate.php?letter=$letter&dbname=$dbname&iter=$i&inext=$inext&orient=$orient&title=";
echo rawurlencode($title);
echo "'><center>Rotate '$title' 90 deg Counter Clockwise</center></a></h3>";
?>
</div>
                        <div class="cleared"></div>
                    </div>
                </div>
                      <div class="cleared"></div>
                    </div>
            <div class="cleared"></div>
    </div>

</body>
</div>
</html>
