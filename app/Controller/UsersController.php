<?php

//App::uses('AppController','Controller');

class UsersController extends AppController{
  
  public $components =array('Manager');
  public $helper = array('Html','Form');
  
  public function index(){
      $data =$this->Manager->read();
      if($data){
       $this->set('posts',$data); 
     }
  }
  public function login(){
  
    if($this->request->is('post')){
      $post =$this->User->findByEmail($this->request->data['User']['email']);
      $data=$this->request->data['User']['password'];
       //print_r($data);
       $data =$this->User->hasHasedPass($post,$data);
         if($data){
         if($this->Manager->create($post)){
           // $this->Session->setFlash('Congratulation! Session Created at Manager');}
           $this->redirect(array('controller'=>'profiles','action' => 'index'));
           }
	}
      
    else {
         throw new NotFoundException(__('Invalid '));
     }
    }
  }
  public function logout(){
 
   $this->Manager->destroy();
   $this->redirect(array('action' => 'index'));
 }
}
