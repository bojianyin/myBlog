<?php
	Class Category {
		//输出所有子集
		static Public function unlimArray($data,$pid=0){
			$ary=array();
			foreach($data as $v){
				if($v['pid']==$pid){
					$v['child']=self::unlimArray($data,$v['id']);
					$ary[]=$v;
				}
			}
			return $ary;
		} 
		static Public function mergeArray($data,$pid=0,$level=0,$htm='-'){
			$ary=array();
			foreach($data as $v){
				if($v['pid']==$pid){
					$v['html']=str_repeat($htm,$level);
					$v['level']=$level+1;
					$ary[]=$v;
					$ary=array_merge($ary,self::mergeArray($data,$v['id'],$level+1));
				}
			}
			return $ary;
		}
		static Public function findChildId($cate,$id){
			$ary=array();
			foreach($cate as $v){
				if($v['pid']==$id){
					$ary[]=$v['id'];
				}
			}
			return $ary;
		}
		static Public function getParent($cate,$id){
			$ary=array();
			foreach($cate as $v){
				if($v['id']==$id){
					$ary[]=$v;
					$ary=array_merge(self::getParent($cate,$v['pid']),$ary);
				}
			}
			return $ary;
		}
	}
?>