<?php
	Class HotWidget extends Widget {
		Public function render($data){
			$data['blog']=M("blog")->order("click desc")->limit("3")->select();
			return $this->renderFile("",$data);
		}
	}
?>