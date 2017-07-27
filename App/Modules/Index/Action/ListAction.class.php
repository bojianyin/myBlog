<?php
	Class ListAction extends Action {
		Public function index(){
			$id=$_GET['id'];
			$cate=M("cate")->order("sort")->select();
			import("Class.Category",APP_PATH);
			$child=Category::findChildId($cate,$id);
			$child[]=$id;
			$this->data=D("BlogView")->where(array("cid"=>array("IN",$child)))->select();
			
			$this->list=Category::getParent($cate,$id);
			$this->display();
		}
	}
?>