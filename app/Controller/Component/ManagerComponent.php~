<?php

App::uses('Component','Controller');

class ManagerComponent extends Component {
   
   public $components =array('Session');
   public function create($post){
       print_r($post);
       $this->Session->write('Users',array($post['User']['email']));
       return true;
 }
   public function destroy(){
   if($this->Session->destroy('Users')){
   $this->Session->setFlash('Your Session Expired');
   return true;}
   else 
   return false;
 }
   public function read(){
     $data =$this->Session->read('Users');
       return $data;
 }
 
}

