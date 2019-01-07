<?php

namespace RapidWeb\AmazonMwsConfigGenerator;

class ConfigGenerator
{
    private $config = [
        'storeName' => 'YourAmazonStore',
        'merchantId' => '',
        'marketplaceId' => '',
        'keyId' => '',
        'secretKey' => '',
        'MWSAuthToken' => '',
        'AMAZON_SERVICE_URL' => 'https://mws.amazonservices.com/',
        'logpath' => '\'.__DIR__.\'/log.txt',
        'logfunction' => '',
        'muteLog' => 'false',
        'configpath' => __DIR__.'/../configs/',
    ];

    private $filename;


    public function __construct()
    {
        $this->generateFilename();
    }

    public function setStoreName($storeName)
    {
        $this->config['storeName'] = $storeName;
    }

    public function setMerchantId($merchantId)
    {
        $this->config['merchantId'] = $merchantId;
    }

    public function setMarketplaceId($marketplaceId)
    {
        $this->config['marketplaceId'] = $marketplaceId;
    }

    public function setKeyId($keyId)
    {
        $this->config['keyId'] = $keyId;
    }

    public function setSecretKey($secretKey)
    {
        $this->config['secretKey'] = $secretKey;
    }

    public function setMWSAuthToken($MWSAuthToken)
    {
        $this->config['MWSAuthToken'] = $MWSAuthToken;
    }

    public function setAmazonServiceURL($amazonServiceURL)
    {
        $this->config['AMAZON_SERVICE_URL'] = $amazonServiceURL;
    }

    public function setLogPath($logPath)
    {
        $this->config['logpath'] = $logPath;
    }

    public function setLogFunction($logFunction)
    {
        $this->config['logfunction'] = $logFunction;
    }

    public function setMuteLog($muteLog)
    {
        $this->config['muteLog'] = $muteLog ? 'true' : 'false';
    }

    public function setConfigPath($configPath) {
        $this->config['configpath'] = $configPath;
    }

    public function setFilename($filename) {
        $this->filename = $filename;
    }

    public function save()
    {
        $fileContents = $this->populateTemplate($this->getTemplate());

        $filePath = $this->config['configpath'] . $this->filename;

        $result = file_put_contents($filePath, $fileContents);

        if (!$result) {
            throw new \Exception('Error saving to file: '. $filePath);
        }

        return realpath($filePath);
    }

    public function delete()
    {
        $file = $this->config['configpath'] . $this->filename;
        return unlink($file);
    }

    private function getTemplate()
    {
        return file_get_contents(__DIR__.'/../resources/amazon-config.template.php');
    }

    private function populateTemplate($template)
    {
        foreach($this->config as $key => $value) {
            $template = str_replace('[['.$key.']]', $value, $template);
        }

        return $template;
    }

    private function generateFilename()
    {
        $this->filename = 'amazon-config.'.sha1(serialize($this->config)).'.php';
    }
}
