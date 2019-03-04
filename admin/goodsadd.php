<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


define('ACC',true);
require("../include/init.php");

$cat = new CatModel();
$catlist = $cat->select();
$catlist = $cat->getCatTree($catlist);

include(ROOT . 'view/admin/templates/goodsadd.html');


