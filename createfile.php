<?php
//Copyright 2016 vCloudMate.guru

//Connection string
include 'connecttoaws.php';

//get the bucket name
$bucket = $_GET["bucket"];

//create the file name
$key = 'vcloudmate.txt';

//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "Hi this is our test page!"
));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket</h2>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket=$bucket&key=$key\">Click Here To Read Your File</a></div>";

?>