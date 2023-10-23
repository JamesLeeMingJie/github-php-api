<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \Github\Client();

// $authMethod = new \Github\AuthMethod();

// $client->authenticate('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', null, Github\AuthMethod::ACCESS_TOKEN);

// $username = 'JamesLeeMingJie';

// $repository = 'github-php-api';

$expectedArray = [
  'content' => 'images/cat.jpeg',
];

$path = "images/dummy.jpeg";

$imageContent = "images/cat.jpeg";

$commitMessage = 'Created a cat file';

$committer = array('name' => $username, 'email' => 'lee_mingjie@hotmail.com');

// $fileInfo = $client->api('repo')->contents()->create($username, $repository, $path, $imageContent, $commitMessage, 'main', $committer);

?>

<pre>
  <?php
  print_r($fileInfo);
  ?>
</pre>
