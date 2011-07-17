<?php
//class PostsController extends AppController {
class EntoriesController extends AppController {
//      EntoriesController 

    var $name = 'Entories';


    function index() {
        $this->layout = "flash";
        $this->Session->write('myname', 'Pugiemonn');
        //echo 'Write: '.$this->Session->read('myname');
        $this->set('entories', $this->Entory->find('all'));    
    }

    function add() {
        $this->layout = "flash";
        //App::import('Sanitize');
        if(!empty($this->data))
        {
        //echo "aaa";
        //print_r($this->data);
            if($this->Entory->save($this->data))
            {
                $this->flash('Flash情報が投稿されました', '/');
                // print_r($this->data);
        //echo "bbb";
            }
        }
        //if(isset($this->Session->read('myname')))
        if($this->Session->read('myname') == 'Pugiemonn')
        {
            $this->render("view_2");
            //$this->render = "view_2";
        }
    }

    function edit($id=null) {
        $this->layout = "flash";
        $this->Entory->id = $id;

        if(empty($this->data)){
            $this->data = $this->Entory->read();
        }
        else
        {
            if($this->Entory->save($this->data['Entory']))
            {
                $this->flash('編集しました', '/');
            }
        }
    }

    // viewについて
    function view($id = null) {
        //$this->layout = "flash";
        $this->Entory->id = $id;
        $this->set('entory', $this->Entory->read());
    }
}


?>
