<?php
App::uses('AppController', 'Controller');
/**
 * Instits Controller
 *
 * @property Instit $Instit
 * @property PaginatorComponent $Paginator
 */
class InstitsController extends AppController {

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
		$this->Instit->recursive = 0;
		$this->set('instits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Instit->exists($id)) {
			throw new NotFoundException(__('Invalid instit'));
		}
		$options = array('conditions' => array('Instit.' . $this->Instit->primaryKey => $id));
		$this->set('instit', $this->Instit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instit->create();
			if ($this->Instit->save($this->request->data)) {
				$this->Session->setFlash(__('The instit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instit could not be saved. Please, try again.'));
			}
		}
		$jurisdiccions = $this->Instit->Jurisdiccion->find('list');
		$this->set(compact('jurisdiccions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Instit->exists($id)) {
			throw new NotFoundException(__('Invalid instit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Instit->save($this->request->data)) {
				$this->Session->setFlash(__('The instit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instit.' . $this->Instit->primaryKey => $id));
			$this->request->data = $this->Instit->find('first', $options);
		}
		$jurisdiccions = $this->Instit->Jurisdiccion->find('list');
		$this->set(compact('jurisdiccions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Instit->id = $id;
		if (!$this->Instit->exists()) {
			throw new NotFoundException(__('Invalid instit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Instit->delete()) {
			$this->Session->setFlash(__('The instit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The instit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
