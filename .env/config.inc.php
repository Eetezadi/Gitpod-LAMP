<?php
/**
 * Generated configuration file
 * Generated by: phpMyAdmin 5.2.1 setup script
 * Date: Mon, 30 Oct 2023 17:18:58 +0000
 */

/* Servers configuration */
$i = 0;

/* Server: gitpod [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'gitpod';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = '';
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = 'gitpod';
$cfg['Servers'][$i]['password'] = 'gitpod';

/* End of servers configuration */

$cfg['blowfish_secret'] = \sodium_hex2bin('772964a15c87e679916b4d149889422e493723d1810f81faee23e6e5cd9ef9ae');
$cfg['DefaultLang'] = 'en';
$cfg['ServerDefault'] = 1;
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';