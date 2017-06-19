<?php

namespace Landing\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LandingController extends AbstractActionController {

//    protected $userTable;

    public function indexAction() {
        
        return new ViewModel(array(
//            'users' => $this->getUserTable()->fetchAll(),
        ));
    }
    
//    public function getUserTable(){
//        if (!$this->userTable) {
//             $sm = $this->getServiceLocator();
//             $this->userTable = $sm->get('Landing\Model\UserTable');
//         }
//         return $this->userTable;
//    }

//    public function addAction() {
//        $request = $this->getRequest();
//        $response = $this->getResponse();
//        if ($request->isPost()) {
//            $new_user = new \Landing\Model\Entity\User();
//            if (!$id = $this->getUsersTable()->saveUser($new_user))
//                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
//            else {
//                $response->setContent(\Zend\Json\Json::encode(array('response' => true, 'new_id' => $id)));
//            }
//        }
//        return $response;
//    }
//
//    public function removeAction() {
//        $request = $this->getRequest();
//        $response = $this->getResponse();
//        if ($request->isPost()) {
//            $post_data = $request->getPost();
//            $id = $post_data['id'];
//            if (!$this->getUsersTable()->removeUser($id))
//                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
//            else {
//                $response->setContent(\Zend\Json\Json::encode(array('response' => true)));
//            }
//        }
//        return $response;
//    }
//
//    public function updateAction() {
//        // update post
//        $request = $this->getRequest();
//        $response = $this->getResponse();
//        if ($request->isPost()) {
//            $post_data = $request->getPost();
//            $id = $post_data['id'];
//            $user_content = $post_data['content'];
//            $user = $this->getUsersTable()->getUser($id);
//            $user->setUser($user_content);
//            if (!$this->getUsersTable()->saveUser($user))
//                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
//            else {
//                $response->setContent(\Zend\Json\Json::encode(array('response' => true)));
//            }
//        }
//        return $response;
//    }
//
//    public function getUsersTable() {
//        if (!$this->_usersTable) {
//            print_r($this->getServiceLocator());
//            $sm = $this->getServiceLocator();
//            $this->_usersTable = $sm->get('Landing\Model\UsersTable');
//        }
//        return $this->_usersTable;
//    }

}

//use Zend\Mvc\Controller\AbstractActionController;
//use Zend\View\Model\ViewModel;
//use Zend\I18n\Translator\Translator;
//
//class LandingController extends AbstractActionController {
//
//    protected $usersTable;
//
////    public function indexAction() {
//////        $langCode = $this->getServiceLocator()
//////                ->get('serviceTranslator');
//////        $requestUriRegulated = $this->getServiceLocator()
//////                ->get('serviceTranslatorUrlRegulator');
//////
////        $view = new ViewModel(array(
//////            'requestUriRegulated' => $requestUriRegulated,
//////            'langCode' => $langCode,
//////            'users' => $this->getUserTable()->fetchAll(),
////        ));
////        return $view;
////    }
////}
//
//    
//    
//    
//    public function getUsersTable() {
//        if (!$this->usersTable) { 
//            
//            $sm = $this->getServiceLocator();
//            $this->usersTable = $sm->get('Landing\Model\UsersTable');
//        }
//        return $this->usersTable;
//    }
//
//    public function indexAction() {
//
//        print_r("hey_1");
//        $users = $this->getUsersTable()->fetchAll();
//        print_r("hey_2");
//        $view = new ViewModel(array(
////            'users' => $this->getUsersTable()->fetchAll(),
//        ));
//        return $view;
//    }
//
//    public function addAction() {
//        $request = $this->getRequest();
//        $response = $this->getResponse();
//        if ($request->isPost()) {
//            $new_user = new \Landing\Model\Entity\User();
//            if (!$user_id = $this->getUsersTable()->saveUser($new_user))
//                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
//            else {
//                $response->setContent(\Zend\Json\Json::encode(array('response' => true, 'new_user_id' => $user_id)));
//            }
//        }
//        return $response;
//    }
//
//    public function removeAction() {
//        $request = $this->getRequest();
//        $response = $this->getResponse();
//        if ($request->isPost()) {
//            $post_data = $request->getPost();
//            $user_id = $post_data['id'];
//            if (!$this->getUsersTable()->removeUser($user_id))
//                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
//            else {
//                $response->setContent(\Zend\Json\Json::encode(array('response' => true)));
//            }
//        }
//        return $response;
//    }
//
//    public function updateAction() {
//        // update post
//        $request = $this->getRequest();
//        $response = $this->getResponse();
//        if ($request->isPost()) {
//            $post_data = $request->getPost();
//            $user_id = $post_data['id'];
//            $user_content = $post_data['content'];
//            $user = $this->getUsersTable()->getUser($user_id);
//            $user->setUser($user_content);
//            if (!$this->getUsersTable()->saveUser($user))
//                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
//            else {
//                $response->setContent(\Zend\Json\Json::encode(array('response' => true)));
//            }
//        }
//        return $response;
//    }
//
//}
