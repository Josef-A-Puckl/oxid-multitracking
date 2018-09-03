<?php
/**
 * Module information
 */
$sMetadataVersion = '2.0';
$aModule = array(
    'id'           => 'multitracking',
    'title'        => 'WIBROS Trackingsupport for multiple carriers',
    'email'        => 'oxid@wibros.de',
    'url'          => 'http://www.wibros.de',
    'description'  => 'Module for overwriting the default tracking url method to return urls for other carriers than DPD',
    'thumbnail'    => 'picture.png',
    'version'      => '2.0.0',
    'author'       => 'WIBROS GmbH',
    'extend'       => array(
        \OxidEsales\Eshop\Application\Model\Order::class => \OxidCommunity\MultiTracking\Model\Order::class,
    )
);
