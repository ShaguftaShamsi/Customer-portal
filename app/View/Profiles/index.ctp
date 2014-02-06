<?php
 if(!empty($posts)){?>
  <h1>Welcome! <?=$posts[0]?></h1>
<?   }
echo  $this->Html->link(
 'Create Profile',
 array('action' =>'create')
);

