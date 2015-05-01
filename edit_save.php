
<?php
// The list of allowed image MIME types associated to
// file extensions.
$imgallowedtypes = array(
    'image/jpeg' => 'jpg'
);

$imgdataurl = &$_POST['dataURL'];
$dbname = &$_POST['dbname'];
$title = &$_POST['title'];
$letter = &$_POST['letter'];
$dir = "/$dbname/$letter/$title";
$file = $dir . ".jpg";

if (empty($imgdataurl)) {
  die('error1');
}

// A data URL starts like this:
// data:[<MIME-type>][;charset="<encoding>"][;base64],<data>

// Here we find the comma delimiter.
$comma = strpos($imgdataurl, ',');
if (!$comma) {
  die('error2');
}

$imginfo = substr($imgdataurl, 0, $comma);
if (empty($imginfo) || !isset($imgdataurl{($comma+2)})) {
  die('error3');
}

// Split by ':' to find the 'data' prefix and the rest of
// the info.
$imginfo = explode(':', $imginfo);

// The array must have exactly two elements and the
// second element must not be empty.
if (count($imginfo) !== 2 || $imginfo[0] !== 'data' ||
    empty($imginfo[1])) {
  die('error4');
}

// The MIME type must be given and it must be base64-encoded.
$imginfo = explode(';', $imginfo[1]);

if (count($imginfo) < 2 ||
    !array_key_exists($imginfo[0], $imgallowedtypes) ||
    ($imginfo[1] !== 'base64' && $imginfo[2] !== 'base64')) {
  die('error5');
}

$imgdest = 'tmp/' . sha1($imgdataurl) . '.' .
            $imgallowedtypes[$imginfo[0]];
$imgdataurl = substr($imgdataurl, $comma + 1);

if (!file_put_contents($imgdest, base64_decode($imgdataurl))) {
  die('error6');
}
//Directory Information
$newdirectory = "./$dbname/$letter";
$filenew = "$newdirectory/$title.jpg";

//Function to copy edited file to instrument directory.
copy($imgdest,$filenew);

?>