<?php
App::uses('AppController', 'Controller');
/**
 * Jurisdiccions Controller
 *
 * @property Jurisdiccion $Jurisdiccion
 * @property PaginatorComponent $Paginator
 */
class JurisdiccionsController extends AppController {

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
		$this->Jurisdiccion->recursive = 0;
		$this->set('jurisdiccions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jurisdiccion->exists($id)) {
			throw new NotFoundException(__('Invalid jurisdiccion'));
		}
		$options = array('conditions' => array('Jurisdiccion.' . $this->Jurisdiccion->primaryKey => $id));
		$this->set('jurisdiccion', $this->Jurisdiccion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jurisdiccion->create();
			if ($this->Jurisdiccion->save($this->request->data)) {
				$this->Session->setFlash(__('The jurisdiccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jurisdiccion could not be saved. Please, try again.'));
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
		if (!$this->Jurisdiccion->exists($id)) {
			throw new NotFoundException(__('Invalid jurisdiccion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jurisdiccion->save($this->request->data)) {
				$this->Session->setFlash(__('The jurisdiccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jurisdiccion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jurisdiccion.' . $this->Jurisdiccion->primaryKey => $id));
			$this->request->data = $this->Jurisdiccion->find('first', $options);
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
		$this->Jurisdiccion->id = $id;
		if (!$this->Jurisdiccion->exists()) {
			throw new NotFoundException(__('Invalid jurisdiccion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jurisdiccion->delete()) {
			$this->Session->setFlash(__('The jurisdiccion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jurisdiccion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
