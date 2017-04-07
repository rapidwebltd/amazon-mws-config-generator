<?php

// Store configuration
$store['[[storeName]]']['merchantId'] = '[[merchantId]]';         // Merchant ID for this store
$store['[[storeName]]']['marketplaceId'] = '[[marketplaceId]]';   // Marketplace ID for this store
$store['[[storeName]]']['keyId'] = '[[keyId]]';                   // Access Key ID
$store['[[storeName]]']['secretKey'] = '[[secretKey]]';           // Secret Access Key for this store
$store['[[storeName]]']['serviceUrl'] = '';                       // Optional override for Service URL (not required)
$store['[[storeName]]']['MWSAuthToken'] = '[[MWSAuthToken]]';     // Token needed for web apps and third-party developers

// Service URL Base (default: 'https://mws.amazonservices.com/')
$AMAZON_SERVICE_URL = '[[AMAZON_SERVICE_URL]]';

// Location of log file to use (default: __DIR__.'/log.txt')
$logpath = '[[logpath]]';

// Name of custom log function to use
$logfunction = '[[logfunction]]';

// Turn off normal logging (boolean)
$muteLog = [[muteLog]];
