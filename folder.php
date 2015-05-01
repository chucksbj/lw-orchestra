<div class="art-nav">
	<div class="art-navup-l"></div>
	<div class="art-navup-r"></div>
<div class="art-nav-outer">
	<ul class="art-hmenu">

<?php
session_start();
$dbname = $_GET['dbname'];

$letter_array = range(A,Z);

echo "<li></li>";
foreach ($letter_array as $letter) { 
if (stristr($letter_string, $letter) === FALSE)
echo "<li>";
echo "<a href='songs.php?letter=$letter&dbname=$dbname&orient=$orient'><span class='l'></span><span class='r'></span><span class='t'>$letter</span></a>";
echo "</li>";
}
$song = rawurlencode('Song List');
echo "<li>";
echo "<a href='songs.php?dbname=$dbname&letter=$song&orient=$orient'><span class='l'></span><span class='r'></span><span class='t'>SL</span></a>";
echo "</li>";
echo "<li>     </li>";
?>
</ul>
</div>
</div>