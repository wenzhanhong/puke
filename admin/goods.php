<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/

define('ACC',true);
require("../include/init.php");

/*
思路
接收goods_id
实例化goodsModel
调用find方法
展示商品信息
*/

$goods_id = $_GET['goods_id'] + 0;

$goods = new GoodsModel();
$g = $goods->find($goods_id);

if(empty($g)) {
    echo '商品不存在';
    exit;
}

print_r($g);
