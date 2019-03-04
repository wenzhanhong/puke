<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



define('ACC',true);

require('include/init.php');


/*
require(ROOT . 'tool/UpTool.class.php');


$uptool = new UpTool();
$uptool->setExt('doc');
$uptool->setSize(1);


if($res = $uptool->up('avatar')) {
    echo 'OK';
    echo $res;
} else {
    echo 'FAIL<br />';
    echo $uptool->getErr();
}
*/

var_dump(filter_var('@b.com',FILTER_VALIDATE_EMAIL));


