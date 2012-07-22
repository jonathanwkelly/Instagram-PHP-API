<?php

// Initialize class for public requests
include_once '../instagram.class.php';

$config = array(
	'apiKey' => 'fbb1b0a4280441cd999e94fb57ee41f7',
	'cacheResults' => TRUE,
	'cacheDir' => '/path/to/cache/dir/', # will be created if not exists
	'cacheExpire' => 60 # number of seconds to hold on to cache
)
$instagram = new Instagram($config);

// Get recently tagged media
$media = $instagram->searchMedia('36.156916', '-86.769717', 50);

// Display results
foreach ($media->data as $data) {
  echo "<img src=\"{$data->images->thumbnail->url}\">";
}

?>