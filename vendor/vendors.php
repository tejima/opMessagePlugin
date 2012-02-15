#!/usr/bin/env php
<?php

set_time_limit(0);

if (isset($argv[1])) {
    $_SERVER['OPENPNE_BRANCH'] = $argv[1];
}

$vendorDir = __DIR__;
$name = "OpenPNE"; 
$url = "http://github.com/houou/HOUOU";
$target = isset($_SERVER['OPENPNE_BRANCH']) ? $_SERVER['OPENPNE_BRANCH'] : 'tjm/apitest';
echo "> Installing/Updating $name\n";

$installDir = $vendorDir.'/'.$name;

system(sprintf('git clone -q %s %s', escapeshellarg($url), escapeshellarg($installDir)));

system(sprintf('cd %s && git fetch -q origin && git checkout %s', escapeshellarg($installDir), escapeshellarg($target)));

system(sprintf('mkdir %s/plugins/opMessagePlugin ', escapeshellarg($installDir)));
system(sprintf('cd %s && mv apps config data i18n lib templates test web vendor/OpenPNE/plugins/opMessagePlugin',escapeshellarg($vendorDir . "/../" )));


