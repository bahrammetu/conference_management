<?php

namespace Landing\Controller;

use Landing\Model\UserTableInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LandingController extends AbstractActionController {

    private $userTable;

    public function __construct(UserTableInterface $userTable) {
        $this->userTable = $userTable;
    }

    public function indexAction() {
        print_r('$this->userTable');
        return new ViewModel([
            'users' => $this->userTable->findAllUsers(),
        ]);
    }

}
