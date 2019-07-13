<?php
namespace app\index\controller;


use think\Controller;
use think\captcha\Captcha;
use common\model\Utils;


class Login extends Controller{
    public function index(){
        return $this -> fetch();
    }


    // login
    public function login(){
        $msg = [];
        $user_name = trim(input("account"));
        $pass_word = trim(input("password"));
        $vercode = trim(input("vercode"));
        $password = md5($pass_word);

        if(!$vercode){
            $msg['code'] = 1;
            $msg['msg'] = "请输入验证码";
            return json($msg);
        }

        $captcha = new Captcha();
        $check_code = $captcha->check($vercode);
        if(!$check_code){
            $msg['code'] = 1;
            $msg['msg'] = "验证码错误";
            return json($msg);
        }
        $user = db("user")
            -> where(['account' => $user_name, 'password' => $password, 'status' => 1])
            -> find();

        if(!$user){
            $msg['code'] = 1;
            $msg['msg'] = "用户名或密码输入错误";
            return json($msg);
        }
        if(!isset($_SESSION)){
            session_start();
        }

        $session = array(
            'user_id' => $user['id'],
            'account' => $user['account'],
            // 'mobile' => $user['mobile'],
            // 'photo' => $user['photo'],
            // 'role_id' => $user['role_id']
        );
        $_SESSION['admin'] = $session;

        $msg['code'] = 0;
        $msg['msg'] = "登录成功";
        return json($msg);


    }

    // login out
	public function logout() {
		if (!isset($_SESSION)) {
			session_start();
		}
		unset($_SESSION['admin']);
		return json([
			'code' => 1,
			'msg' => '已退出登录',
		]);
	}
}