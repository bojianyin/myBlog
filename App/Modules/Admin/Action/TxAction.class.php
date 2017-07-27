<?php
	Class TxAction extends CommonAction {
		Public function index(){
			$this->display();
		}
		Public function upload(){
			//删除之前的头像
			$info=M("user")->where(array("id"=>$_POST['uid']))->field("tx")->find();
			if($info['tx']!=0){
				$file=__ROOT__.'/upload/'.$info['tx'];
				$is=unlink($_SERVER['DOCUMENT_ROOT'].$file) or die('图片删除失败');
			}
			import("ORG.Net.UploadFile");
			$load=new UploadFile();
			$load->supportMulti=false;
			$load->dateFormat='Ymd';
			$load->subType="date";
			if($load->upload('./upload/')){
				$info=$load->getUploadFileInfo();
				$savename=$info[0]['savename'];
				$where=array("id"=>$_POST['uid']);
				$isSuc=M("user")->where($where)->setField("tx",$savename);
				session("userTx",$savename);
				$isSuc?$this->success("添加成功",U(GROUP_NAME.'/Index/index')):$this->error("添加失败");
			}else{
				$this->error("上传失败");
			}
		}
	}
