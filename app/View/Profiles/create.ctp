<?php
 echo $this->Form->create('Profile');
 echo $this->Form->input('first_name',array(
      'label'=> 'First Name',
      ));
  echo $this->Form->input('last_name',array(
      'label'=> 'Last Name',
      ));
echo $this->Form->input('company',array(
      'label'=> 'Company',
      ));
echo $this->Form->input('position',array(
      'label'=> 'Department',
      ));
echo $this->Form->input('location',array(
      'label'=> 'Location',
      ));
echo $this->Form->input('address',array(
      'label'=> 'Address',
      ));
echo $this->Form->input('birthday',array(
      'label'=> 'Date of birth',
       'dateFormat' =>'DMY',
       //'minYear' => date('Y') -60,
       //'maxYear' => date('Y') -18,
      ));?>
<fieldset>
<legend> <?php echo _('Add Image')?></legend>
<?php
echo $this->Form->input('image',array('type' =>'file'));?>
</fieldset>
 <?echo $this->Form->end('Submit');
?>
