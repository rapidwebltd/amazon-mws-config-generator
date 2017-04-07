<?php

require_once __DIR__.'/../vendor/autoload.php';

use RapidWeb\AmazonMwsConfigGenerator\ConfigGenerator;

// Create an Amazon config, setting all variable as necessary
$amazonConfig = new ConfigGenerator;
$amazonConfig->setStoreName('My Shop');
$amazonConfig->setMerchantId('ABC');
$amazonConfig->setMarketplaceId('ABC');
$amazonConfig->setKeyId('ABC');
$amazonConfig->setSecretKey('ABC');
$amazonConfig->setMWSAuthToken('ABC');
$amazonConfig->setAmazonServiceURL('https://mws.amazonservices.com/');

// Save out Amazon config to a file
$configPath = $amazonConfig->save();

echo 'Config file saved to: '.$configPath;
echo PHP_EOL;
