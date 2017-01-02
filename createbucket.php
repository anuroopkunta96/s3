<?php

//copyright 2016 - vCloudMate.guru

require '/var/www/html/vendor/autoload.php';

$client = new Aws\S3\S3Client(['version'=>'latest','region'=>'us-east-1'
]);


// Create a unique bucket name
$bucket = uniqid("mytestcloudbucket123321", true);

// Create our bucket using our unique bucket name
$result = $client->createBucket(array('Bucket' => $bucket));

//HTML to Create our webpage
echo "<h1 align=\"center\">Hi this is the test page</h1>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div>";

?>