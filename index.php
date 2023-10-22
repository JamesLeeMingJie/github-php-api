<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \Github\Client();

$client->authenticate('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', null, authMethod: 'AUTH_CLIENT_ID');

$username = 'JamesLeeMingJie';

$repository = 'github-php-api';

$path = "/images";

$content = "Some content";

$commitMessage = 'Create a file';

$committer = array('name' => $username, 'email' => 'lee_mingjie@hotmail.com');

$fileInfo = $client->api('repo')->contents()->create($username, $repository, $path, $content, $commitMessage, '', $committer);

?>

<pre>
  <?php
  print_r($fileInfo);
  ?>
</pre>

<?php
// $github = new Client();
// $github->authenticate('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', null, Client::AUTH_ACCESS_TOKEN);

// $repository = 'JamesLeeMingJie/github-php-api';
// $filePath = 'docs/example.txt';
// $fileContent = file_get_contents($filePath);

// $result = $github->repos()->contents()->create(
//   'JamesLeeMingJie',
//   $repository,
//   $filePath,
//   'Upload file from admin panel',
//   $fileContent
// );

// print_r($result);

// if ($result['content']['sha']) {
//   echo "Successful upload";
// } else {
//   echo "Upload fail";
// }

?>