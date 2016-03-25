<?php
App::uses('AppController', 'Controller');


class EmployeesController extends AppController {

	var $uses = array('Salon','Service','Employee');

	public function index() {
		$this->set('employees',$this->Employee->find('all'));
		$this->set('salons',$this->Salon->find('all'));
	}


	public function view($id = null) {
		$dane =  $this->Employee->findByid($id);
		$this->set('employee', $dane);
		$this->set('salon',$this->Salon->findByid($dane['Employee']['salons_id']));
	}


	public function add() {
		$this->set('salons',$this->Salon->find('list'));
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Flash->success(__('Pracownik został dodany'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Pracownik nie został dodany.'));
			}
		}
	}

	public function edit($id = null) {
		$this->set('salons',$this->Salon->find('list'));
		$dane = $this->Employee->findByid($id);
		if($this->request->is(array('post','put')))
		{
			$this->Employee->id = $id;
			if($this->Employee->save($this->request->data))
			{
				$this->Flash->success('Pracownik zedytowany.');
				$this->redirect('index');
			}
			else
				$this->Flash->error('Brak możliwości edycji pracownika.');
		}
		$this->request->data = $dane;
	}


	public function delete($id = null) {
		$this->Employee->id = $id;
		$this->request->allowMethod('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Flash->success(__('Pracownik został usunięty'));
		} else {
			$this->Flash->error(__('Pracownik nie został usunięty'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
