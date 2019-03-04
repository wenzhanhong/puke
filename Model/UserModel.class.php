<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



defined('ACC')||exit('Acc Deined');


class UserModel extends Model {
    protected $table = 'user';
    protected $pk = 'user_id';
    protected $fields = array('user_id','username','email','passwd','regtime','lastlogin');

    protected $_valid = array(
                            array('username',1,'用户名必须存在','require'),
                            array('username',0,'用户名必须在4-16字符内','length','4,16'),
                            array('email',1,'email非法','email'),
                            array('passwd',1,'passwd不能为空','require')
    );

    protected $_auto = array(
                            array('regtime','function','time')
                            );


    /*
        用户注册
    */
    public function reg($data) {
        if($data['passwd']) {
            $data['passwd'] = $this->encPasswd($data['passwd']);
        }

        return $this->add($data);
    }
    
    
    protected function encPasswd($p) {
        return md5($p);
    }

    /*
    根据用户名查询用户信息
    */
    public function checkUser($username) {
        $sql = 'select count(*) from ' . $this->table . " where username='" .$username . "'";
        return $this->db->getOne($sql);
    }
}


