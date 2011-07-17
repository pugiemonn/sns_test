<?php
class AppController extends Controller
{
  function checkSession()
  {
    if (!$this->Session->check('my_id'))
    {
      $this->redirect('/users/login');
      exit();
    }
  }
}
?>

