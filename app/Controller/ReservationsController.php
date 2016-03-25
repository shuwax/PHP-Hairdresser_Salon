<?php

App::uses('AppController', 'Controller');

class ReservationsController extends AppController {

    var $uses = array('Reservation', 'Service', 'User');

    public function index() {
     
        $this->set('reservations', $this->Reservation->find('all'));
        $this->set('users', $this->User->find('all'));
        $this->set('services', $this->Service->find('all'));
    }

    public function view($id = null) {
        $this->set('services', $this->Service->find('all'));
        $this->set('users', $this->User->find('all'));
        $this->set('reservation', $this->Reservation->findByid($id));
    }

    public function add() {
        $this->set('users', $this->User->find('list'));
        $this->set('services', $this->Service->find('list'));

        if ($this->request->is('post')) {
            $this->Reservation->create();
            debug($this->request->data);
            if ($this->Reservation->save($this->request->data)) {
                $this->Flash->success(__('Uzytkownik został dodany'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Uzytkownik nie został dodany.'));
            }
        }
    }

    public function edit($id = null) {

        $dane = $this->Reservation->findByid($id); // przechowywanie danych przed zapisem
        $this->set('services', $this->Service->find('list'));

        $this->set('users', $this->User->find('list'));

        if ($this->request->is(array('post', 'put'))) {
            $this->Reservation->id = $id;
            if ($this->Reservation->save($this->request->data)) {
                $this->Flash->success('Uzytkownik zedytowany.');
                $this->redirect('index');
            } else
                $this->Flash->error('Brak możliwości edycji uzytkownika.');
        }
        $this->request->data = $dane;
    }

    public function delete($id = null) {
        $this->Reservation->id = $id;
        $this->request->allowMethod('post', 'delete');
        if ($this->Reservation->delete()) {
            $this->Flash->success(__('Rezerwacja została usunięta'));
        } else {
            $this->Flash->error(__('Rezerwacja nie został usunięta'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
