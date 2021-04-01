<?php
declare(strict_types=1);
/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = 'dsagdfgdsfhdfgjhetrwtretyrtyrtyr';

$i = 0;
$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['Servers'][$i]['compress'] = false;

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';