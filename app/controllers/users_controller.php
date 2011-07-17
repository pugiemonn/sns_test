<?php
class UsersController Extends AppController {

    var $name = 'Users';

    function index(){
//        echo Configure::version();
        $this->set('users', $this->User->find('all'));    
    }

    function add() { 
        if(!empty($this->data)) {
            if($this->User->save($this->data)) {
                $this->flash("登録が完了しました", "/users");
//                print_r($this->data);
            }
        }
    }

    function login() {
        
    }
}
?>
