<?php
App::uses('AppController', 'Controller');


class UsersController extends AppController {

	public function index() {
		$this->set('users',$this->User->find('all'));
                return $this->User->find('all');
	}


	public function view($id = null) {
		$this->set('user', $this->User->findByid($id));
	}


	public function add() {
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

	public function edit($id = null) {

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
