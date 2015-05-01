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

</head>

<?php
$lette = $_GET['letter'];
$letter = rawurldecode($lette);
$inext = $_GET['inext'];
$orient = $_GET['orient'];
if (!isset($inext))
{
	$inext = 0;
}
if (is_null($letter))
{
	$letter = "A";
}

echo "<body id='body$inext'>";
//Page orientation determination
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
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-header">
                <div class="art-header-clip">
                <div class="art-header-center">
                    <div class="art-header-jpeg"></div>
                </div>
                </div>
                <div class="art-logo">
                                 <center><h1 class="art-logo-name">Living Word Orchestra Music</h1></center>
                                                 <h2 class="art-logo-text">2Ch 5:13  "The trumpeters and singers performed together in unison to praise and give thanks to the lord. Accompanied by trumpets, cymbals, and other instruments, they raised their voices and praised the lord with these words:
“He is good!
His faithful love endures forever!”
At that moment a thick cloud filled the Temple of the lord. "</h2>
                                </div>
            </div>
            <div class="cleared reset-box"></div>
<?php
include('folder.php');
?>
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
                <div class="art-blockheader">
                    <div class="l"></div>
                    <div class="r"></div>
<?php
$lette = $_GET['letter'];
$letter = rawurldecode($lette);
$dbname = $_GET['dbname'];
$titl = $_GET['title'];
$title = rawurldecode($titl);

echo "<table class='page-table'><tr>";	
echo "<td class='page-col1'><h3 class='t'>$letter</h3></td>";
//path to directory to scan
$directory = "./$dbname/$letter/";

//replace all .JPG extensions with .jpg to make it compatible with site
$imagess = glob("$dbname/$letter/*.JPG"); 
$d = 0;
foreach($imagess as $image) {
    $d++;
    $trimmed = substr($image, 0,-4);
    rename($image, $trimmed . ".jpg"); 
}

//replace all .jpeg extensions with .jpg to make it compatible with site
$imagesss = glob("$dbname/$letter/*.jpeg"); 
$d = 0;
foreach($imagesss as $image) {
    $d++;
    $trimmed = substr($image, 0,-5);
    rename($image, $trimmed . ".jpg"); 
}

//replace all .JPEG extensions with .jpg to make it compatible with site
$imagessss = glob("$dbname/$letter/*.JPEG"); 
$d = 0;
foreach($imagessss as $image) {
    $d++;
    $trimmed = substr($image, 0,-5);
    rename($image, $trimmed . ".jpg"); 
}

//Make a list of all files with the .jpg extension.
$images = glob("$dbname/$letter/*.jpg", GLOB_BRACE);

if ($letter=="Song List")
{
array_multisort(array_map('filemtime', $images), SORT_NUMERIC, SORT_ASC, $images); 
}
else
{
//Sort the files properly
function cmp($a , $b) {
     $a = explode(' ',$a);
     $b = explode(' ',$b);
     $size = min(count($a), count($b));
     for($index =0; $index < $size; ++$index) {
         $a1 = ereg_replace("[']", "",$a[$index]);
         $b1 = ereg_replace("[']", "",$b[$index]);
         $equal = 0;
         if (is_numeric($a1) && is_numeric($b1)) {
             $equal = $a1 - $b1;
         } else {
             $equal = strcasecmp($a1,$b1);
         }
         if ($equal < 0) {
             return -1;
         }
         if ($equal > 0) {
             return 1;
         }
     }
     return count($a) - count($b);    
}
usort($images, "cmp");
}

$_SESSION['images'] = $images;

function curPageURL() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 8080 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
 return $url;
}

$_SESSION['prevurl'] = curPageURL();
//print each file name

$iter = count($images)-1;

// Pagination:

$multiplier =($iter/14) -1;
if (round($multiplier)<$multiplier)
{
	$multiplier=round($multiplier) + 1;
}
else
{
	$multiplier=round($multiplier);
}

echo "<td class='page-col2'>";	
echo "<h3 class='t'>";
for ($n=0;$n<=$multiplier;$n++)
{
	$inextt=$n*15;
	$page=$n+1;
	if ($multiplier>=1)
	{
		echo " | ";
		echo "<a href='songs.php?dbname=$dbname&letter=$lette&iter=$iter&inext=$inextt&orient=$orient' id='link$inextt'>Page $page</a>";
	}
	else
	{
		echo"";
	}
}

	if ($multiplier>=1)
	{
		echo " | ";
	}
echo "</h3>";
echo "</td>";
echo "</tr></table>";


?>
                </div>
                <div class="art-blockcontent">
                    <div style="margin-left: 5px;" class="art-blockcontent-body">

<?php



// Song List Table Code:

echo "<table class='art-blockcontent-body-table'><tr>";
for ($i=$inext;$i<=$inext+14;$i++){
echo "<tr><td class='col1'><h4 class='t'>";
$title = basename($images[$i],".jpg");
echo "<a href='song_display.php?title=";
echo rawurlencode($title);
echo "&letter=$lette&dbname=$dbname&iter=$i&inext=$inext&orient=$orient'>$title</a>";
echo "</h4></td><td class='col3'><h4 class='t'>";
echo "<a href='song_copy.php?title=";
echo rawurlencode($title);
echo "&letter=$lette&dbname=$dbname&iter=$i&inext=$inext&orient=$orient'>Add to Songlist</a>";
echo "</h4></td><td class='col5'><h4 class='t'>";	
echo "<a href='rename.php?title=";
echo rawurlencode($title);
echo "&letter=$lette&dbname=$dbname&iter=$i&inext=$inext&orient=$orient'>Rename</a>";
echo "</h4></td><td class='col5'><h4 class='t'>";
echo "<a href='song_edited_add.php?title=";
echo rawurlencode($title);
echo "&dbname2=$dbname&letter=$lette&iter=$i&inext=$inext&orient=$orient'>Copy</a>";
echo "</h4></td><td class='col5'><h4 class='t'>";

//echo "<a href='songedit.php?title=";
echo "<a href='edit.php?title=";
echo rawurlencode($title);
echo "&letter=$lette&dbname=$dbname&orient=$orient'>Edit</a>";
echo "</h4></td><td class='col2'><h4 class='t'>";
echo "<a href='song_delete.php?title=";
echo rawurlencode($title);
echo "&letter=$lette&dbname=$dbname&iter=$i&orient=$orient'>Delete</a>";
echo "</h4></td></tr>";
}
echo "</table>";
?>
<div class="spacer"></div>
                <div class="art-blockheader" style="width: 100%;">    
					<div class="l"></div>
                    <div class="r"></div>
					
<?php					

echo "<table class='page-table'><tr>";	
echo "<td class='page-col1'><h3 class='t'>$letter</h3></td>";
					
if (round($multiplier)<$multiplier)
{
	$multiplier=round($multiplier) + 1;
}
else
{
	$multiplier=round($multiplier);
}

echo "<td class='page-col2'>";	
echo "<h3 class='t'>";
for ($n=0;$n<=$multiplier;$n++)
{
	$inextt=$n*15;
	$page=$n+1;
	if ($multiplier>=1)
	{
		echo " | ";
		echo "<a href='songs.php?dbname=$dbname&letter=$lette&iter=$iter&inext=$inextt&orient=$orient' id='link$inextt'>Page $page</a>";
	}
	else
	{
		echo"";
	}
}

	if ($multiplier>=1)
	{
		echo " | ";
	}
echo "</h3>";
echo "</td>";
echo "</tr></table>";
?>
                </div>
                        <div class="cleared"></div>
<div class="cleared"></div>						
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<?php
include('folder.php');
?>	
    </div>
                      <div class="cleared"></div>
                    </div>
            <div class="cleared"></div>
            <div class="art-footer">
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
