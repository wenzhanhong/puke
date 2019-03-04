<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/**
catedit.php
作用: 编辑栏目

思路:
接收cat_id

实例化model
调用model取出栏目信息

展示到表单
**/


define('ACC',true);
require('../include/init.php');

$cat_id = $_GET['cat_id'] + 0;

$cat = new CatModel();
$catinfo = $cat->find($cat_id);


$catlist = $cat->select();
$catlist = $cat->getCatTree($catlist);
//print_r($catinfo);

include(ROOT . 'view/admin/templates/catedit.html');

