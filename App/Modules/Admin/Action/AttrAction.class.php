<?php
	Class AttrAction extends CommonAction {
		Public function index(){
			$this->attr=M("attr")->select();
			$this->display();
		}
		//添加属性
		Public function addAttr(){
//			p($_POST);	
			$this->display();
		}
		Public function addAttrHandler(){
			if(M("attr")->add($_POST)){
				$this->success("添加成功",U(GROUP_NAME.'/Attr/index'));
			}else{
				$this->error("添加失败");
			}
		}
	}
?>