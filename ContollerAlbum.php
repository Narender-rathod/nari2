<?php
 namespace Album\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class AlbumController extends AbstractActionController{
	protected $albumTable;

	public function indexAction(){
        public function indexAction()
	 {
              return new viewModel(array(
             'albums' => $this->getAlbumTable()->fetchAll(),
         ));
         }

        public function addAction()
         {
               return new viewModel(add);
         }

        public function editAction()
         {
               return new viewModel();
         }

        public function deleteAction()
         {
               return new viewModel();
          }
     public function getAlbumTable()
     {
         if (!$this->albumTable) {
             $sm = $this->getServiceLocator();
             $this->albumTable = $sm->get('Album\Model\AlbumTable');
         }
         return $this->albumTable;
     }

   }
