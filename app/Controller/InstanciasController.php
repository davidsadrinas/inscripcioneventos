<?php
App::uses('AppController', 'Controller');
/**
 * Instancias Controller
 *
 * @property Instancia $Instancia
 * @property PaginatorComponent $Paginator
 */
class InstanciasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instancia->recursive = 0;
		$this->set('instancias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Instancia->exists($id)) {
			throw new NotFoundException(__('Invalid instancia'));
		}
		$options = array('conditions' => array('Instancia.' . $this->Instancia->primaryKey => $id));
		$this->set('instancia', $this->Instancia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instancia->create();
			if ($this->Instancia->save($this->request->data)) {
				$this->Session->setFlash(__('The instancia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instancia could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Instancia->exists($id)) {
			throw new NotFoundException(__('Invalid instancia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Instancia->save($this->request->data)) {
				$this->Session->setFlash(__('The instancia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instancia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instancia.' . $this->Instancia->primaryKey => $id));
			$this->request->data = $this->Instancia->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Instancia->id = $id;
		if (!$this->Instancia->exists()) {
			throw new NotFoundException(__('Invalid instancia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Instancia->delete()) {
			$this->Session->setFlash(__('The instancia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The instancia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
