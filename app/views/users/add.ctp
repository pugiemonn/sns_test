<h1>ユーザー登録</h1>

<?php   echo $form->create('User');
        echo $form->input('User.name');
        echo $form->input('User.mail');
        echo $form->input('User.password');
        echo $form->end('ユーザー登録');
 ?>

