<?php
App::uses('AppController', 'Controller');


class UsersController extends AppController {

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect(array('controller' => 'Pages','action' => 'display'));
			}
			$this->Flash->error(__('Niepoprawna nazwa użytkowwnika lub hasło.'));
		}
	}

	public function logout() {
		$this->Auth->logout();
		$this->redirect(array('controller' => 'Pages','action' => 'display'));
	}





	public function admin_index() {
		$this->set('users',$this->User->find('all'));
	}


	public function view($id = null) {
		$this->set('user', $this->User->findByid($id));
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('Uzytkownik został dodany'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Uzytkownik nie został dodany.'));
			}
		}
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('Uzytkownik został dodany'));
				return $this->redirect(array('controller' => 'Pages','action' => 'display'));
			} else {
				$this->Flash->error(__('Uzytkownik nie został dodany.'));
			}
		}
	}
	
	public function admin_edit($id = null) {

		$dane = $this->User->findByid($id);
		if($this->request->is(array('post','put')))
		{
			$this->User->id = $id;
			if($this->User->save($this->request->data))
			{
				$this->Flash->success('Uzytkownik zedytowany.');
				$this->redirect('index');
			}
			else
				$this->Flash->error('Brak możliwości edycji uzytkownika.');
		}
		$this->request->data = $dane;
	}
	
	public function edit($id = null) {
		$dane = $this->User->findByid($id);
		if($this->request->is(array('post','put')))
		{
			$this->User->id = $id;
			if($this->User->save($this->request->data))
			{
				$this->Flash->success('Uzytkownik zedytowany.');
				$this->redirect('index');
			}
			else
				$this->Flash->error('Brak możliwości edycji uzytkownika.');
		}
		$this->request->data = $dane;
	}


	public function admin_delete($id = null) {
		$this->User->id = $id;
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('Uzytkownik został usunięty'));
		} else {
			$this->Flash->error(__('Uzytkownik nie został usunięty'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function delete($id = null) {
		$this->User->id = $id;
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('Uzytkownik został usunięty'));
		} else {
			$this->Flash->error(__('Uzytkownik nie został usunięty'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
