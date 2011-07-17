<?php
class CommentsController Extends AppController {

    var $name = 'Comments';

    function index(){
//        echo Configure::version();
        $this->set('comments', $this->Comment->find('all'));    
    }

    function add() { 
        if(!empty($this->data)) {
            if($this->Comment->save($this->data)) {
                $this->flash("登録が完了しました", "/users");
//                print_r($this->data);
            }
        }
    }

    function login() {
        
    }
}
?>
