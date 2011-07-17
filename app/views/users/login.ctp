<form action="<?php echo $html->url('/users/login'); ?>" method="post">
<?if ($error): ?>
<div id="sys_msg">email and password do not match!</div>
<? endif; ?>
<table border="0" cellspacing="2" cellpadding="2">
<tr><td width="40%" align="right">email</td><td><?php echo $form->input('User/email', array('size' => 30)); ?></td></tr>
<tr><td width="40%" align="right">password</td><td><?php echo $form->input('User/pwd', array('size' => 20)); ?></td></tr>
<tr><td width="40%">&nbsp;</td><td><input type="checkbox" name="save" value="" /> save my info?</td></tr>
<tr><td width="40%">&nbsp;</td><td><?php echo $form->submit('Let me in!'); ?></td></tr>
<tr><td width="40%">&nbsp;</td><td><a href="">forgot your password?</a></td></tr>
</table>
</form>
