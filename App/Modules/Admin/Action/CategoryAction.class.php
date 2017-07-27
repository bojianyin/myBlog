<?php
	Class CategoryAction extends Action {
		Public function index(){
			$cate=M("cate")->order("sort")->select();
			import('Class.Category',APP_PATH);
			$this->cate=Category::mergeArray($cate);
			$this->display();
		}
		Public function sortHandler(){
			$db=M("cate");
			foreach($_POST['sort'] as $key=>$v){
				$db->where(array('id'=>$key))->setField("sort",$v);
			}
			$this->redirect(GROUP_NAME.'/Category/index');
		}
		Public function addCate(){
			$this->pid=isset($_GET['pid'])?$_GET['pid']:0;
			$this->display();
		}
		Public function addCateHandler(){
			if(M("cate")->add($_POST)){
				$this->success("添加成功",U(GROUP_NAME.'/Category/index'));
			}else{
				$this->error("添加失败");
			}
		}
	}
?>