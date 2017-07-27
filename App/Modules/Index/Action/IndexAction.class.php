<?php
	Class IndexAction extends Action {
		Public function Index(){
			$topCate=M("cate")->where(array("pid"=>0))->order("sort")->select();
			$Cate=M("cate")->order("sort")->select();
			import("Class.Category",APP_PATH);
			foreach($topCate as $key=>$v){
				$cate=Category::findChildId($Cate,$v['id']);
				$cate[]=$v['id'];
				$where=array("cid"=>array("IN",$cate));
				$topCate[$key]['blog']=M("blog")->where($where)->select();
			}
			$this->assign("blogs",$topCate);
			$this->display();
		}
	}
?>