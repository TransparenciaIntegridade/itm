<?php

namespace Comparar2\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * DistritoController
 *
 * @author
 *
 * @version
 *
 */
class Comparar2Controller extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
	protected $distritoTable;
	
	public function indexAction() {
		
		$this->layout('layout/empty');
		$id = ( int ) $this->params ()->fromRoute ('id', 0);
		$id2 = ( int ) $this->params ()->fromRoute ('id2', 0);
		$id3 = ( int ) $this->params ()->fromRoute ('id3', 0);
		$id4 = ( int ) $this->params ()->fromRoute ('id4', 0);
		$id5 = ( int ) $this->params ()->fromRoute ('id5', 0);
		
		return array(
				'id' => $id,
				'id2' => $id2,
				'id3' => $id3,
				'id4' => $id4,
				'id5' => $id5,
		
		);
		
	}
	
	public function pdf2Action(){
	
		$id = ( int ) $this->params ()->fromRoute ('id', 0);
		$id2 = ( int ) $this->params ()->fromRoute ('id2', 0);
		$id3 = ( int ) $this->params ()->fromRoute ('id3', 0);
		$id4 = ( int ) $this->params ()->fromRoute ('id4', 0);
		$id5 = ( int ) $this->params ()->fromRoute ('id5', 0);
	
		return array(
				'id' => $id,
				'id2' => $id2,
				'id3' => $id3,
				'id4' => $id4,
				'id5' => $id5,
	
		);
	
	}

}