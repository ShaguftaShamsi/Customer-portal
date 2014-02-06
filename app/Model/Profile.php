<?php
class Profile extends  AppModel{

public $validate =array(
 'first_name' =>array(
       'nonempty' =>array(
                'rule'=>'notEmpty',
                'message'=>'This field cannot be left blank.',
        ),
        'pattern'=>array(
		 'rule'=>'/^[A-Za-z]+/i',
		 'message'=>'Only letters allowed',
         ),
   ),
  'last_name' =>array(
      'nonempty' =>array(
                'rule'=>'notEmpty',
                'message'=>'This field cannot be left blank.',
        ),
        'pattern'=>array(
		 'rule'=>'/^[A-Za-z]+/i',
		 'message'=>'Only letters allowed',
         ),
   ),
  'company' => array(
      'rule'=>'notEmpty'),

   'position' =>array(
        'nonempty' =>array(
                'rule'=>'notEmpty',
                'message'=>'This field cannot be left blank.',
        ),
        'pattern'=>array(
		 'rule'=>'/^[A-Za-z]+/i',
		 'message'=>'Only letters allowed',
         ),
   ),
  'birthday' =>array(
      'rule'=>'notEmpty'),
   'address'=>array(
      'rule'=>'notEmpty'),
   'location'=>array(
       'rule'=>'notEmpty'),
  );
}





