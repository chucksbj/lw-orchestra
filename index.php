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
   <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
   <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
   <script language="Javascript"><!--//--></script>
   <script type="text/javascript" src="brsdet.js"></script>
   <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
   <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
</head>
<body>
 <?php
$orient = $_GET['orient'];

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
<body>
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
                                 <h1 class="art-logo-name">Living Word Orchestra Music</h1>
                                                 <h2 class="art-logo-text">2Ch 5:13  "It came even to pass, as the trumpeters and singers were as one, to make one sound to be heard in praising and thanking the LORD; and when they lifted up their voice with the trumpets and cymbals and instruments of musick, and praised the LORD, saying, For he is good; for his mercy endureth for ever: that then the house was filled with a cloud, even the house of the LORD;"</h2>
                                </div>
            </div>
            <div class="cleared reset-box"></div>

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


<h3 class="t">Select Instrument</h3>


                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

					
<?php
$iter=$_GET['iter'];
$inext=$_GET['inext'];
$dbname=$_GET['dbname'];
$letter=$_GET['letter'];

if(is_null($letter))
{
	$letter="A";
}

$orient=$_GET['orient'];

echo "<h4 class='t'><a href='songs.php?dbname=Clarinet&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Clarinet</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Bass&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Bass</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Flute&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Flute</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=FHorn1&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>1st French Horn</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=FHorn2&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>2nd French Horn</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=FHorn3&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>3rd French Horn</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Piano&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Piano</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Sax&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Saxophone</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Tensax&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Tenor Sax</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=TBone1&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>1st Trombone</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=TBone2&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>2nd Trombone</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=TBone3&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>3rd Trombone</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Trump1&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>1st Trumpet</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Trump2&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>2nd-3rd Trumpet</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Guitar&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Guitar</a></h4>";
echo "<h4 class='t'><a href='songs.php?dbname=Violin&letter=$letter&iter=$iter&inext=$inext&orient=$orient'>Violin</a></h4>";
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
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">						
<?php
include("footer.php");
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
