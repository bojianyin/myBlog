<?php
	Class CommonAction extends Action {
		Public function _initialize(){
			if(!(isset($_SESSION['uid']) and isset($_SESSION['uname']))){
				$this->redirect(GROUP_NAME."/Login/index");
			}
		}
	}
?>