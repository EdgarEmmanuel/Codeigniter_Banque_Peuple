<?php 

class BPController{
    public function getPageLOgin(){
        include_once(SRC_VIEWS."/login_page.php");
    }

    public function getPageCreateAccount(){
        include_once(SRC_VIEWS."/create_Account.php");
    }
}


?>