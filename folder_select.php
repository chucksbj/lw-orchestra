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
$image=$_GET['image'];
$dbname2=$_GET['dbname2'];
$iter=$_GET['iter'];
$inext=$_GET['inext'];
$titl=$_GET["title"];
$title=rawurlencode($titl);
$type=$_GET['type'];
$state=$_GET['state'];
$dbname=$_GET['dbname'];
$letter=$_GET['letter'];
$orient=$_GET['orient'];
$spec = rawurlencode('Special Events');
$band = rawurlencode('Band Technique Step By Step');
$bands = rawurlencode('Bands Across America');
echo "<h4 class='t'><b>Select Which Letter Or Folder The Song Is Going To:</b></h4></br>";

echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter=$letter&letter2=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext&orient=$orient'>Normal Song</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=$spec&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>Special Events</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=$band&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>Band Technique Step by Step</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=$bands&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>Bands Across America</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=A&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>A</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=B&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>B</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=C&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>C</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=D&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>D</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=E&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>E</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=F&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>F</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=G&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>G</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=H&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>H</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=I&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>I</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=J&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>J</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=K&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>K</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=L&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>L</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=M&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>M</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=N&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>N</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=O&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>O</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=P&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>P</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=Q&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>Q</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=R&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>R</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=S&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>S</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=T&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>T</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=U&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>U</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=V&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>V</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=W&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>W</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=X&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>X</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=Y&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>Y</a></h4>";
echo "<h4 class='t'><a href='html_submit_edit.php?image=$image&title=$title&letter2=Z&letter=$letter&type=$type&state=$state&dbname=$dbname&dbname2=$dbname2&iter=$iter&inext=$inext$inext&orient=$orient'>Z</a></h4>";
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
