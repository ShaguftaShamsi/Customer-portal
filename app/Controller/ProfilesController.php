<?php
 class ProfilesController extends AppController{
  public $components =array('Manager');
  public function index(){
      $data =$this->Manager->read();
      if($data){
      $this->set('posts',$data); 
     }
  }
  public function create(){
   $this->loadModel('User');
   if($this->request->is('post')){
      	
    $data =$this->request->data;
    $session_read = $this->Manager->read();
     $id = $this->User->findByEmail($session_read,array('field' =>'User.id'));
    
     if($id['User']['id'] > 0)
     $data['Profile']['id'] = $id['User']['id'];
     $data['Profile']['created_at']=date('Y-m-d H:i:s');
     $data['Profile']['updated_at']=date('Y-m-d H:i:s');
      $this->Profile->create();
         if($this->Profile->save($data)){
          $data1=$this->Profile->id;
          $this->redirect(array('action'=>'view',$data1));
         }
         else 
          $this->Session->setFlash(_('Error.'));
   }
 }

 public function view($myArgument = null){
     
     $id = $this->requestAction(array('action'=>'create'));
     
     $data=$this->Profile->findById($myArgument);
     $this->set('posts',$data);
   
}
}
?>
