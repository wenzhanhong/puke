<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



define('ACC',true);
require('../include/init.php');



// 调用model
$cat = new CatModel();
$catlist = $cat->select();

$catlist = $cat->getCatTree($catlist,0);
//print_r($catlist);

include(ROOT . 'view/admin/templates/catelist.html');
