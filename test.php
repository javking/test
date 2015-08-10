<?php
/**
 * [Weizan System] Copyright (c) 2014 012WZ.COM
 * Weizan is NOT a free software, it under the license terms, visited http://www.012wz.com/ for more details.
 */
require './framework/bootstrap.inc.php';
$db = new DB($_W['config']['db1']);
$openids = $db->fetchall('select * from wx_msgopenid');
var_dump($openids);
