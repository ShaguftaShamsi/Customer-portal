<h1> Login </h1>
<h2> Welcome </h2>
<?php 
if(!empty($posts)){
echo ($posts[0]);
} 
?>
<?php  echo  $this->Html->link(
 'Login',
 array('action' =>'login')
);
?>
<?php  echo  $this->Html->link(
 'Logout',
 array('action' =>'logout')
);
?>
