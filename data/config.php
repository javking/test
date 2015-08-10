<?php
defined('IN_IA') or exit('Access Denied');

$config = array();

$config['db']['host'] = 'localhost';
$config['db']['username'] = 'weixin';
$config['db']['password'] = 'weixin2015';
$config['db']['port'] = '3306';
$config['db']['database'] = 'weixin';
$config['db']['charset'] = 'utf8';
$config['db']['pconnect'] = 0;
$config['db']['tablepre'] = 'weixin_';

$config['db1']['host'] = 'localhost';
$config['db1']['username'] = 'nw55wh';
$config['db1']['password'] = 'nw55wh';
$config['db1']['port'] = '3306';
$config['db1']['database'] = 'nw55wh';
$config['db1']['charset'] = 'utf8';
$config['db1']['pconnect'] = 0;
$config['db1']['tablepre'] = 'wx_';

// --------------------------  CONFIG COOKIE  --------------------------- //
$config['cookie']['pre'] = 'be7e_';
$config['cookie']['domain'] = '';
$config['cookie']['path'] = '/';

// --------------------------  CONFIG SETTING  --------------------------- //
$config['setting']['charset'] = 'utf-8';
$config['setting']['cache'] = 'mysql';
$config['setting']['timezone'] = 'Asia/Shanghai';
$config['setting']['memory_limit'] = '256M';
$config['setting']['filemode'] = 0644;
$config['setting']['authkey'] = 'e1d7a25f';
$config['setting']['founder'] = '1';
$config['setting']['development'] = 0;
$config['setting']['referrer'] = 0;

// --------------------------  CONFIG UPLOAD  --------------------------- //
$config['upload']['image']['extentions'] = array('gif', 'jpg', 'jpeg', 'png');
$config['upload']['image']['limit'] = 5000;
$config['upload']['attachdir'] = 'attachment';
$config['upload']['audio']['extentions'] = array('mp3');
$config['upload']['audio']['limit'] = 5000;