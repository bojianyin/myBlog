<?php
	Class BlogViewModel extends ViewModel{
		protected $viewFields=array(
			"blog"=>array(
				"id","createtime","click","title"
				,"_type"=>"LEFT"
			),
			"cate"=>array(
				"name","_on"=>"blog.cid=cate.id"
			),
		);
	}
?>