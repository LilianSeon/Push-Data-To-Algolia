<?php
// By using composer require algolia/algoliasearch-client-php.
require 'vendor/autoload.php';

// Create an indence of the client with Application ID + Admin API Key. (Information avalable on your Algolia Dashboard).
$client = Algolia\AlgoliaSearch\SearchClient::create('ApplicationID', 'AdminAPIKey');

// Initialized the index where you want to upload your data to.
// If the index doesn't exist yet, it will be automatically created.
$index = $client->initIndex('Index_Name');

// Fetch your JSON file. 
$jsonFile = json_decode(file_get_contents('example.json'), true);

// Once you have your records ready, you can then push them to Algolia using the replaceAllObjects method.
$index->replaceAllObjects($jsonFile, ['autoGenerateObjectIDIfNotExist' => true]);
?>