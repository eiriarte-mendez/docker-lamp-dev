<?php

/**
 * Servers configuration
 */
$i = 0;

/**
 * MariaDB
 */
$i++;
$cfg['Servers'][$i]['host'] = 'mariadb';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

/**
 * MySQL
 */
$i++;
$cfg['Servers'][$i]['host'] = 'mysql';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

