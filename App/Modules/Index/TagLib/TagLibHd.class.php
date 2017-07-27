<?php
//	import("TagLib");
	Class TagLibHd extends TagLib {
		protected $tags=array(
			"loop"=>array("attr"=>"order",'close'=>1)
		);
		Public function _loop($attr,$content){
			$attr=$this->parseXmlAttr($attr);
			$str=<<<str
				<?php
					\$cate=M("cate")->order("{$attr['order']}")->select();
					import("Class.Category",APP_PATH);
					\$cate=Category::unlimArray(\$cate);
					foreach(\$cate as \$v):
						extract(\$v);
				?>
str;
			$str.=$content;
			$str.="<?php endforeach ?>";
			return $str;
		}
	}
?>