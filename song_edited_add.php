<?php

include('lock.php');
	
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
   <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
   <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
   <script language="Javascript"><!--//--></script>
   <script type="text/javascript" src="brsdet.js"></script>
<script>
var browsername = whichBrs();

if (browsername == "Firefox") {
	document.writeln("<script type='text/javascript' src='dragscrollsa.js'>");
	
else if (browsername == "Safari") {
	document.writeln("<script type='text/javascript' src='dragscrollsa.js'>");
	}
else {
	document.writeln("<script type='text/javascript' src='dragscroll.js'>");
	}
</script>
</script>
   
   <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
   <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">

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


<h3 class="t">Copy Song</h3>


                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">



<!--area Type="runner" face="Helvetica, Verdana, Arial" size="2" color="#FFFFFF" style="0" password_protection="basic"-->
<p>
<!--table tableId="table_d2e20"-->

<?php
$dbname=$_GET['dbname'];
$image=$_GET['image'];
$dbname2=$_GET['dbname2'];
if(!isset($dbname2)){
$dbname2=$_GET['dbname'];
}
$iter=$_GET['iter'];
$inext=$_GET['inext'];
$titl=$_GET["title"];
$title=rawurlencode($titl);
$type=$_GET['type'];
$state=$_GET['state'];
$letter=$_GET['letter'];

echo "<h4 class='t'><b>Select Which Instrument Song Is Going To:</b></h4></br>";

echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Clarinet&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Clarinet</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Bass&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Bass</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Flute&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Flute</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=FHorn1&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>1st French Horn</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=FHorn2&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>2nd French Horn</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=FHorn3&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>3rd French Horn</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Piano&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Piano</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Sax&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Saxophone</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Tensax&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Tenor Sax</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=TBone1&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>1st Trombone</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=TBone2&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>2nd Trombone</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=TBone3&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>3rd Trombone</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Trump1&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>1st Trumpet</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Trump2&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>2nd-3rd Trumpet</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Guitar&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Guitar</a></h4>";
echo "<h4 class='t'><a href='folder_select.php?image=$image&title=$title&letter=$letter&type=$type&state=$state&dbname=Violin&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Violin</a></h4>";


/*
<label><h4 class="t"><b>Select Which Instrument Song Is Going To:</b></h3>
<p><span id="spryselect2">
<select name="dbname" id="dbname" tabindex="1">
<option value="Bass">Bass</option>
<option value="Clarinet">Clarinet</option>
<option value="Flute">Flute</option>
<option value="FHorn1">1st French Horn</option>
<option value="FHorn2">2nd French Horn</option>
<option value="FHorn3">3rd French Horn</option>
<option value="Guitar">Guitar</option>
<option value="TBone1">1st Trombone</option>
<option value="TBone2">2nd Trombone</option>
<option value="TBone3">3rd Trombone</option>
<option value="Trump1">1st Trumpet</option>
<option value="Trump2">2nd Trumpet</option>
<option value="Trump3">3rd Trumpet</option>
<option value="Violin">Violin</option>

</select>

<span id="sprytextfield2"><span class="textfieldRequiredMsg">A value is required.</span></span><span class="style1">*</span></span>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
                          
</form> 
*/
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
