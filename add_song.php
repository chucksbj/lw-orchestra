<?php

include('lock.php');
function curPageURL() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 8080 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
 return $url;
}
session_start();
$_SESSION['prevurl'] = curPageURL();
?>
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

</head>
<body>
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
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
	<ul class="art-hmenu">

	</ul>
</div>
</div>
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


<h3 class="t">Add Song</h3>


                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">



<!--area Type="runner" face="Helvetica, Verdana, Arial" size="2" color="#FFFFFF" style="0" password_protection="basic"-->
<p>
<!--table tableId="table_d2e20"-->

<?php

echo "<h4 class='t'><b>Select Which Instrument Song Is Going To:</b></h4></br>";

echo "<h4 class='t'><a href='folder_select_add.php?dbname=Clarinet&orient=$orient'>Clarinet</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Bass&orient=$orient'>Bass</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Flute&orient=$orient'>Flute</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=FHorn1&orient=$orient'>1st French Horn</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=FHorn2&orient=$orient'>2nd French Horn</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=FHorn3&orient=$orient'>3rd French Horn</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Piano&orient=$orient'>Piano</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Sax&orient=$orient'>Saxophone</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Tensax&orient=$orient'>Tenor Sax</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=TBone1&orient=$orient'>1st Trombone</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=TBone2&orient=$orient'>2nd Trombone</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=TBone3&orient=$orient'>3rd Trombone</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Trump1&orient=$orient'>1st Trumpet</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Trump2&orient=$orient'>2nd-3rd Trumpet</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Guitar&orient=$orient'>Guitar</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Violin&orient=$orient'>Violin</a></h4>";
echo "<h4 class='t'><a href='folder_select_add.php?dbname=Test&orient=$orient'>Testing ONLY</a></h4>";

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
include('footer.php');
?>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
</div>
</body>
</html>
