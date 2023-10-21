<?php
use Github\Client;
use Github\ResultPager;

$github = new Client();
$github->authenticate('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', null, Client::AUTH_ACCESS_TOKEN);

$repository = 'JamesLeeMingJie/github-php-api';
$filePath = '';
$fileContent = file_get_contents($filePath);

$result = $github->repos()->contents()->createFile(
  $repository,
  
)

?>