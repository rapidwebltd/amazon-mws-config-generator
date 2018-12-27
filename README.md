# Amazon MWS Config Generator
Generate configuration files for PHP Amazon MWS library - https://github.com/CPIGroup/phpAmazonMWS

## Example usage

 ```php
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
$amazonConfig->setLogPath('/tmp/amazon-log.txt');
$amazonConfig->setMuteLog(false);
$amazonConfig->setConfigPath('/tmp/config/config-file.php');

// Save out Amazon config to a file
$configPath = $amazonConfig->save();

// Pass in the generated config path to class you wish to use
$amz=new AmazonFeed(null, false, null, $configPath);

// Use as normal...
$amz->setFeedType("_POST_INVENTORY_AVAILABILITY_DATA_");
$amz->setFeedContent($feed);
$amz->submitFeed();
return $amz->getResponse();

// Delete previously generated amazon config (for temporary use)
$amazonConfig->delete();
```
