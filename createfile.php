<?php
//Copyright 2016 vCloudMate.guru

require '/var/www/html/vendor/autoload.php';

$client = new Aws\S3\S3Client(['version'=>'latest','region'=>'us-east-1'
]);


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