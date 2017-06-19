<?php
namespace Landing\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Sql\Select;

class UsersTable extends AbstractTableGateway {


        
    protected $tableGateway;

    // Now it should use a correct hinting
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }


    public function fetchAll() {
        $resultSet = $this->select(function (Select $select) {
            $select->order('created ASC');
        });
        $entities = array();
        foreach ($resultSet as $row) {
            $entity = new Entity\User();
            $entity->setId($row->id)
                    ->setName($row->name)
                    ->setMiddle_name($row->middle_name)
                    ->setSurname($surname->surname)
                    ->setPrefix($prefix->prefix)
                    ->setEmail($row->email)
                    ->setTel($row->tel)
                    ->setNationality($nationality->nationality)
                    ->setRegistration_date($registration_date->registration_date)
                    ->setBirth_date($birth_date->birth_date);
            $entities[] = $entity;
        }
        return $entities;
    }

    public function getUser($id) {
        $row = $this->select(array('id' => (int) $id))->current();
        if (!$row)
            return false;

        $user = new Entity\User(array(
            'id' => $row->id,
            'name' => $row->name,
            'middle_name' => $row->middle_name,
            'surname' => $row->surname,
            'email' => $row->email,
            'tel' => $row->tel,
            'prefix' => $row->prefix,
            'nationality' => $row->nationality,
            'registration_date' => $row->registration_date,
            'birth_date' => $row->birth_date,
        ));
        return $user;
    }

    public function saveUser(Entity\User $user) {
        $data = array(
            'name' => $user->getName(),
            'middle_name' => $user->getMiddle_name(),
            'surname' => $user->getSurname(),
            'prefix' => $user->getPrefix(),
            'email' => $user->getEmail(),
            'tel' => $user->getTel(),
            'birth_date' => $user->getBirth_date(),
            'registration_date' => $user->getRegistration_date(),
            'nationality' => $user->getNationality(),
        );

        $id = (int) $user->getId();

        if ($id == 0) {
            $data['registration_date'] = date("Y-m-d H:i:s");
            if (!$this->insert($data))
                return false;
            return $this->getLastInsertValue();
        }
        elseif ($this->getUser($id)) {
            if (!$this->update($data, array('id' => $id)))
                return false;
            return $id;
        }
        else {
            return false;
        }
    }

    public function removeUser($id) {
        return $this->delete(array('id' => (int) $id));
    }

}



//use RuntimeException;
//use Zend\Db\TableGateway\TableGateway;
//
//class UsersTable
//{
//    protected $tableGateway;
//
//    public function __construct(TableGateway $tableGateway)
//    {
//        $this->tableGateway = $tableGateway;
//    }
//
//    public function fetchAll()
//    {
//        return $this->tableGateway->select();
//    }
//
//    public function getUser($id)
//    {
//        
//        $id = (int) $id;
//        $rowset = $this->tableGateway->select(['id' => $id]);
//        $row = $rowset->current();
//        if (! $row) {
//            throw new RuntimeException(sprintf(
//                'Could not find row with identifier %d',
//                $id
//            ));
//        }
//
//        return $row;
//    }
//
//    public function saveUser(User $user)
//    {
//        $data = array(
//            'name' => $user->getName(),
//            'middle_name' => $user->getMiddle_name(),
//            'surname' => $user->getSurname(),
//            'prefix' => $user->getPrefix(),
//            'email' => $user->getEmail(),
//            'tel' => $user->getTel(),
//            'birth_date' => $user->getBirth_date(),
//            'registration_date' => $user->getRegistration_date(),
//            'nationality' => $user->getNationality(),
//        );
//
//        $id = (int) $user->id;
//
//        if ($id === 0) {
//            $this->tableGateway->insert($data);
//            return;
//        }
//
//        if (! $this->getUser($id)) {
//            throw new RuntimeException(sprintf(
//                'Cannot update user with identifier %d; does not exist',
//                $id
//            ));
//        }
//
//        $this->tableGateway->update($data, ['id' => $id]);
//    }
//
//    public function deleteUser($id)
//    {
//        $this->tableGateway->delete(['id' => (int) $id]);
//    }
//}