<?php
class UsersController Extends AppController {

    var $name = 'Users';
    var $scaffold;

  function home ()
  {
    $this->checkSession();
    $this->set('me', $this->User->findById($this->Session->read('my_id')));
  }

 function login()
  {
    $this->set('error', false);
    if (!empty($this->data))
    {
//      print_r($this->data);
//      print_r($this->data['User/email']);
      //$someone = $this->User->findByEmail($this->data['User']['email']);
      $someone = $this->User->findByEmail($this->data['User/email']);
      print_r($someone);
      if(!empty($someone['User']['pwd']) && $someone['User']['pwd'] == $this->data['User/pwd'])
      {
        $this->Session->write('my_id', $someone['User']['id']);
        $this->redirect('/users/home/');
      }
      else
      {
        $this->set('error', true);
      }
    }
  }

/*
  function beforeFilter()
  {
    $this->checkSession();
  }

  function checkSession()
  {  
    if (!$this->Session->check('User'))
    {
        $this->redirect('/users/login');
        exit();
    }
  }
*/

  function logout()
  {
    $this->Session->delete('User');
    $this->redirect('/');
  }

}
?>
