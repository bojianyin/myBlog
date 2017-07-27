<?php
	Class BlogRelationModel extends RelationModel {
		protected $tableName="blog";
		protected $_link=array(
			"attr"=>array(
				"mapping_type"=>MANY_TO_MANY
				,"mapping_name"=>"attr"
				,"foreign_key"=>"bid"
				,"relation_foreign_key"=>"aid"
				,"relation_table"=>"attr_blog",
			),
			"cate"=>array(
				"mapping_type"=>BELONGS_TO
				,"foreign_key"=>"cid"
//				,"mapping_fields"=>"name"
			),
		);
	}
?>