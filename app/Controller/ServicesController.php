<?php
App::uses('AppController', 'Controller');

class ServicesController extends AppController {

    var $uses = array('Salon','Service'); // Dzięki temu możemy wygodnie pobierać dane z innych tabel
    // np:$this->Salon->find('list);


    public function admin_index() {
        $this->set('services',$this->Service->find('all'));
     $this->set('salons',$this->Salon->find('all')); //ustawienie salons
    }
    public function admin_view($id = null) {
        //ustawienie salon
        $this->set('salons',$this->Salon->find('all'));

        $this->set('service', $this->Service->findByid($id));
    }
    public function admin_add() {

        $this->set('salons',$this->Salon->find('list')); // lista do wybrania nazwy salonu
        // a nie jedynie jego id

        if ($this->request->is('post')) {
            $this->Service->create();
            if ($this->Service->save($this->request->data)) {
                $this->Flash->success(__('Usługa została dodana'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Usługa nie została dodana.'));
            }
        }
    }

    public function admin_edit($id = null) {
        $dane = $this->Service->findByid($id); // przechowywanie danych przed zapisem
        $this->set('salons',$this->Salon->find('list'));
        if($this->request->is(array('post','put')))
        {
            $this->Service->id = $id;
            if($this->Service->save($this->request->data))
            {
                $this->Flash->success('Usługa zedytowana.');
                $this->redirect('index');
            }
            else
                $this->Flash->error('Brak możliwości edycji usługi.');
        }
        $this->request->data = $dane; // wyswietlenie starych danych na formatce
    }


    public function admin_delete($id = null) {
        $this->Service->id = $id;
        $this->request->allowMethod('post', 'delete');
        if ($this->Service->delete()) {
            $this->Flash->success(__('Usługa została usunięta'));
        } else {
            $this->Flash->error(__('Usługa nie została usunięta'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}