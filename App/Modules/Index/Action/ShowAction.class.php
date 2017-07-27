<?php
	Class ShowAction extends Action {
		Public function index(){
			$id=$_GET['id'];
			$where=array("id"=>$id);
			M("blog")->where($where)->setInc("click");
			$this->data=M("blog")->where($where)->find();
			$datas=$this->data;
			import("Class.Category",APP_PATH);
			$cate=M("cate")->order("sort")->select();
			$this->list=Category::getParent($cate,$datas['cid']);
			$this->display();
		}
	}
?>