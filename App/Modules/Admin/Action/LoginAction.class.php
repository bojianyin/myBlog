<?php
	Class LoginAction extends Action {
		Public function index(){
			$this->display();
		}
		//登陆的方法
		Public function loginHandler(){
			$name=$_POST['username'] or die("不能为空");
			$pass=$_POST['p'] or die("不能为空");
			$where=array("name"=>$name);
			if(!$data=M("user")->where($where)->find()){
				$this->error("用户不存在");
			}else{
				if(md5($pass)==$data['pass']){
					session("uid",$data['id']);
					session("uname",$data['name']);
					session("logintime",$data['logintime']);
					session("loginip",$data['loginip']);
					session("userTx",$data['tx']);
					$this->success("登陆成功",U(GROUP_NAME."/Index/index"));
				}else{
					$this->error("登陆失败，密码错误");
				}
			}
		} 
		Public function regHandler(){
			if(!IS_POST) halt("页面不存在");
			$pass=$_POST['passwd'];
			$pass2=$_POST['passwd2'];
			$code=$_POST['code'];
			$where=array("name"=>$_POST["user"]);
			if(!M("user")->where($where)->find()){
				if($pass==$pass2){
					if(md5($code)==$_SESSION['verify']){
						$data=array(
							"name"=>$_POST['user']
							,"pass"=>md5($_POST['passwd'])
							,"logintime"=>time()
							,"loginip"=>get_client_ip()
						);
						if(M("user")->add($data)){
							$this->success("注册成功",U(GROUP_NAME.'/Login/index'));
						}
					}else{
						$this->error("验证码不正确");
					}
				}else{
					$this->error("俩次密码不一致");
				}
			}else{
				$this->error("用户已存在");
			}
			
		} 
		Public function verify(){
			import("ORG.Util.Image");
			Image::buildImageVerify(4,1,'png',80,30);
		}
	}
?>