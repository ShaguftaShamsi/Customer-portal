<?php


class User extends AppModel{
 
 public $validate = array(
  'email' => array(
         'rule' => 'notEmpty',
          'message' => 'Please fill out the required field '
   ),
   'password' => array(
          'rule' => 'notEmpty' ,
           'message' => 'Put password'
   )
 ); 

 public function hasHasedPass($post,$data){
    
print_r($post);
print_r($data);
  if($post){
   $salt=$post['User']['salt'];
   $hash=$post['User']['hash']; 
    $hash_pass = $salt.''.$data;
    $hash_pass1 =sha1($hash_pass);
 print_r($hash_pass);
print_r($hash_pass1);
print_r($hash);

    if($hash == $hash_pass1)
     {
      return true; 
     }
    else return false;
  }
  
}

}
