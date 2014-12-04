<?php 
class UsersController extends AppController{

	public function add(){
		debug($this->request->is('post')); 
		if($this->request->is('post')){
			$user = $this->User->findByname($this->request->data['User']['name']);
			if(empty($user)){
					$this->User->create($this->request->data,true);
					$this->User->save(null,true,array('name'));
					$this->render('add-success');

			}else{
					$this->render('add-fail');
			}

		}
		

		// si non alors creer donnee

		//affiche utlisateur salons
	}
}