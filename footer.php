<?php
$lette = "$_GET[letter]";
$letter = rawurldecode('$lette');
if(!isset($lette))
	{
	$lette="A";
	}
$spec = rawurlencode('Special Events');
$band = rawurlencode('Band Technique Step By Step');
$bands = rawurlencode('Bands Across America');
$song = rawurlencode('Song List');

$url = $_SERVER['HTTP_REFERER'];
$_SESSION['url'] = $url;

echo "<p><a href='songs.php?dbname=$dbname&letter=$spec&iter=$iter&inext=$inext&orient=$orient'>Special Events</a> | 
	  <a href='songs.php?dbname=$dbname&letter=$band&iter=$iter&inext=$inext&orient=$orient'>Band Technique Step By Step</a> | 
	  <a href='songs.php?dbname=$dbname&letter=$bands&iter=$iter&inext=$inext&orient=$orient'>Bands Across America</a> | 
	  <a href='songs.php?dbname=$dbname&letter=Problems&iter=$iter&inext=$inext&orient=$orient'>Problem Songs</a> | 
	  <a href='index.php?dbname=$dbname&letter=$lette&iter=$iter&inext=$inext&orient=$orient'>Instrument Selection</a> | 
	  <a href='delete_all.php?dbname=$dbname&letter=$lette&iter=$iter&inext=$inext&orient=$orient'>Delete All</a></p>
	  <p>Copyright &copy; 2013-2015 CSBJ. All Rights Reserved.</p>";
echo "<p><a href='add_song.php?dbname=$dbname&letter=$lette&iter=$iter&inext=$inext&orient=$orient'>Add Song</a> | 
	  <a href='$url?dbname=$dbname&letter=$lette&inext=$inext&iter=$iter&orient=vertical'>Vertical Orientation</a> | 
	  <a href='$url?dbname=$dbname&letter=$lette&inext=$inext&iter=$iter&orient=horiz'>Horizontal Orientation</a></p>";
?>   