<?php

App::uses('AppController', 'Controller');

class ReservationsController extends AppController {

    var $uses = array('Reservation', 'Service', 'User', 'Salon','Employee');

    public function admin_index() {
     
        $this->set('reservations', $this->Reservation->find('all'));
        $this->set('users', $this->User->find('all'));
        $this->set('services', $this->Service->find('all'));
    }

    public function admin_view($id = null) {
        $dane = $this->Reservation->findByid($id);
        $this->set('reservation', $dane);
        $this->set('user', $this->User->findByid($dane['Reservation']['users_id']));
        $this->set('service', $this->Service->findByid($dane['Reservation']['services_id']));
    }



    public function admin_edit($id = null) {


        $dane = $this->Reservation->findByid($id);
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

    public function admin_delete($id = null) {
        $this->Reservation->id = $id;
        $this->request->allowMethod('post', 'delete');
        if ($this->Reservation->delete()) {
            $this->Flash->success(__('Rezerwacja została usunięta'));
        } else {
            $this->Flash->error(__('Rezerwacja nie został usunięta'));
        }
        return $this->redirect(array('action' => 'index'));
    }






    public function view($id = null) {
        $dane = $this->Reservation->findByid($id);
        $this->set('reservation', $dane);
        $this->set('user', $this->User->findByid($dane['Reservation']['users_id']));
        $this->set('service', $this->Service->findByid($dane['Reservation']['services_id']));
    }

    public function add() {
        if($this->request->is('ajax'))
        {
            $this->Reservation->create();
            if($this->Reservation->save($this->request->data))
            {
                CakeLog::write('debug', 'myArray22222'.print_r($this->request->data, true) );
                $this->redirect('../');

            }
            else
            {
                $this->Flash->error('Brak możliwości stworzenia Event.');
            }
            die();
        }
    }

    public function edit($id = null) {


        $dane = $this->Reservation->findByid($id);
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
        return $this->redirect(array('action' => 'indexuser'));
    }
    public function indexuser()
    {
        $this->set('reservations', $this->Reservation->find('all',array('order' => 'Reservation.id DESC')));
        $this->set('users', $this->User->find('all'));
        $this->set('services', $this->Service->find('all'));
        $this->set('employees', $this->Employee->find('all'));
    }


}
