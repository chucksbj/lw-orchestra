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
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>
<div id='wrap'>
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

<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
	<ul class="art-hmenu">


<?php
$dbname = $_GET[dbname];
$title = $_GET[title];
$letter = $_GET[letter];
$host = 'localhost';
$user = 'maint_user';
$pswd = '1wwJdn!';
$conn = mysql_connect ($host,$user,$pswd);
if (!$conn)
	{
		die('Unable to connnect to the database: ' . mysql_error());
	}

mysql_select_db("maint_data",$conn);

if (!mysql_select_db("maint_data",$conn))
	{
		die('Error, cannot get information: ' . mysql_error());
	}


$query = "SELECT DISTINCT UPPER(LEFT(Name,1)) as letters FROM '$dbname' ORDER BY letters";

if ($result = mysql_query($query)) {
while ($row = mysql_fetch_array($result)) {
 $letter_string = $row["letters"];
 }
 }

$letter_array = range(A,Z);
 
foreach ($letter_array as $letter) { 
if (stristr($letter_string, $letter) === FALSE)
echo "<li>";
echo "<a href='songs.php?letter=$letter&dbname=$dbname'><span class='l'></span><span class='r'></span><span class='t'>$letter</span></a>";
echo "</li>";
}

mysql_close($conn);
?>



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
<?php
$letter = "$_GET[letter]";
echo "<h3 class='t'>$letter</h3>";
?>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

<?php
$dbname = "$_GET[dbname]";
$folder = "$_GET[folder]";
$titl = "$_GET[title]";
$title = rawurldecode($titl);
$letter="$_GET[letter]";
$host = 'localhost';
$user = 'maint_user';
$pswd = '1wwJdn!';
$conn = mysql_connect ($host,$user,$pswd);
if (!$conn)
	{
		die('Unable to connnect to the database: ' . mysql_error());
	}

mysql_select_db("maint_data",$conn);

if (!mysql_select_db("maint_data",$conn))
	{
		die('Error, cannot get information: ' . mysql_error());
	}

$query_previous = "SELECT * FROM $dbname WHERE Name < '$title' ORDER BY Name DESC LIMIT 0, 1";
$query_next = "SELECT * FROM $dbname WHERE Name > '$title' ORDER BY Name ASC LIMIT 1";

$result_previous = mysql_query($query_previous);
$result_next = mysql_query($query_next);

$row_previous = mysql_fetch_array($result_previous);
$row_next = mysql_fetch_array($result_next);

echo "<table width=962 border ='1' bordercolor ='#000000'><tr>";

		echo "<tr><th	><h4 class='t'>";
		echo "<a href='song_display.php?title=";
		echo rawurlencode($row_previous[0]);
		echo "&letter=$letter&dbname=$dbname&folder=$folder&#anchor'>{$row_previous[0]}</a>";
		
		echo "</h4></th><th><h4 class='t'>";
		echo "<a href='songs.php?letter=$letter&dbname=$dbname&folder=$folder'>Back</a>";
		
		echo "</h4></th><th><h4 class='t'>";
		echo "<a href='song_display.php?title=";
		echo rawurlencode($row_next[0]);
		echo "&letter=$letter&dbname=$dbname&folder=$folder&#anchor'>{$row_next[0]}</a>";

		echo "</h4></th></tr>";

echo "</tr>";
echo "</table>";

mysql_free_result($result_previous);
mysql_free_result($result_next);

mysql_close($conn);



/* Dealing with the JPSs */

switch($folder)
{
	case'';
echo "<a name='#anchor'>";
echo "<img src='./$dbname/$letter/";
echo rawurlencode($titl);
echo ".jpg' height='100%' width='100%'>";
	break;
	default;
echo "<a name='#anchor'>";
echo "<img src='./$dbname/$folder/";
echo rawurlencode($titl);
echo ".jpg' height='100%' width='100%'>";
	break;
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
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
<?php
                               echo "<p><a href='songs.php?title=$title&letter=1&dbname=$dbname&folder=Special Events'>Special Events</a> | <a href='songs.php?title=$title&letter=2&dbname=$dbname&folder=Band Technique Step By Step'>Band Technique Step By Step</a> | <a href='songs.php?title=$title&letter=3&dbname=$dbname&folder=Bands Across America'>Bands Across America</a></p><p>Copyright © 2012 CSBJ. All Rights Reserved.</p>";
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
