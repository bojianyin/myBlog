<?php
	Class BlogAction extends CommonAction {
		Public function index(){
			$this->data=D("BlogRelation")->relation(true)->select();
			$this->display();
		}
		Public function addBlog(){
			$this->saveUrl=U(GROUP_NAME.'/Blog/addBlogHandler');
			$this->updateUrl=U(GROUP_NAME.'/Blog/updateBlog',array('id'=>$_GET['id']));
			if(isset($_GET['id'])){
				$where=array('id'=>$_GET['id']);
				$this->blogInfo=D("BlogRelation")->relation('attr')->where($where)->find();
			}
			$cate=M("cate")->order('sort')->select();
			$this->attr=M("attr")->select();
			import("Class.Category",APP_PATH);
			$this->cate=Category::mergeArray($cate);
			$this->display();
		}
		public function addBlogHandler(){
			$data=$_POST;
			$data['createtime']=time();
			if($id=M("blog")->add($data)){
				if($data['aid']){
					foreach($data['aid'] as $v){
						$arr=array(
							"aid"=>$v
							,"bid"=>$id
						);
						M("attr_blog")->add($arr);
					}
				}
				$this->success("添加成功",U(GROUP_NAME.'/Blog/index'));
			}else{
				$this->error("添加失败");
			}
		}
		
		Public function deleteBlog(){
			$where=$_GET['id'];
			if(M("blog")->delete($where)){
				M("attr_blog")->where(array("bid"=>$where))->delete();
				$this->success("删除成功");
			}else{
				$this->error("删除失败");
			}

		}
		Public function updateBlog(){
			$ids=$_GET['id'];
			M("attr_blog")->where(array("bid"=>$ids))->delete();
			$data=$_POST;
			$data['createtime']=time();
			if($id=M("blog")->where(array("id"=>$ids))->save($data)){
				if($data['aid']){
					foreach($data['aid'] as $v){
						$arr=array(
							"aid"=>$v
							,"bid"=>$ids
						);
						M("attr_blog")->add($arr);
					}
				}
				$this->success("修改成功",U(GROUP_NAME.'/Blog/index'));
			}else{
				$this->error("修改失败");
			}
		}
	}
?>