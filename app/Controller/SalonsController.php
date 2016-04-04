<?php
App::uses('AppController', 'Controller');


class SalonsController extends AppController {

	var $uses = array('Reservation', 'Service', 'User', 'Salon');

	public function admin_index() {
		$this->set('salons',$this->Salon->find('all'));
		return $this->Salon->find('all');
	}
	public function index() {
		$this->set('salons',$this->Salon->find('all'));
		return $this->Salon->find('all');
	}


	public function view($id = null) {
		$this->set('salon', $this->Salon->findByid($id));
		$this->set('services', $this->Service->find('all',array('conditions' => array(
			'Service.salons_id' => array($id)))));
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Salon->create();
			if ($this->Salon->save($this->request->data)) {
				$this->Flash->success(__('Salon został dodany'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Salon nie został dodany.'));
			}
		}
	}

	public function admin_edit($id = null) {
		$dane = $this->Salon->findByid($id);
		if($this->request->is(array('post','put')))
		{
			$this->Salon->id = $id;
			if($this->request->data['Salon']['filename']==null)
			{
				$this->request->data['Salon']['filename'] = $dane['Movie']['filename'];
			}
			if($this->Salon->save($this->request->data))
			{
				$this->Flash->success('Salon zedytowany.');
				return $this->redirect(array('action' => 'index'));
			}
			else
				$this->Flash->error('Brak możliwości edycji salonu.');
		}
		$this->request->data=$dane;// wypisane poprzednich danych
	}


	public function admin_delete($id = null) {
		$this->Salon->id = $id;
		$this->request->allowMethod('post', 'delete');
		if ($this->Salon->delete()) {
			$this->Flash->success(__('Salon został usunięty'));
		} else {
			$this->Flash->error(__('Salon nie został usunięty'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
