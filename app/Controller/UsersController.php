<?php
class UsersController extends AppController{
	public function login(){
		// $this->User->save(array(
		// 	'username' => 'admin',
		// 	'password' => $this->Auth->password('admin')
		// 	));
		if (!(empty($this->request->data))){
			if ($this->Auth->login())
			{
				$this->redirect(array('controller' => 'Account',
										'action' => 'add' 
										));
				$this->set('connexion', true);
			}else
				$this->set('connexion', false);
		}
	}

	public function logout(){
		$this->Auth->logout();
		$this->redirect(array('controller' => 'Home',
										'action' => 'index' 
										));
	}
}
?>