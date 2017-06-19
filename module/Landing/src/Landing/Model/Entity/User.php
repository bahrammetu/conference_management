<?php

namespace Landing\Model\Entity;

class User {

    public $id;
    public $name;
    public $middle_name;
    public $surname;
    public $prefix;
    public $email;
    public $tel;
    public $birth_date;
    public $nationality;
    public $registration_date;

    public function exchangeArray($data) {
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->name = (!empty($data['name'])) ? $data['name'] : null;
        $this->middle_name = (!empty($data['middle_name'])) ? $data['middle_name'] : null;
        $this->surname = (!empty($data['surname'])) ? $data['surname'] : null;
        $this->prefix = (!empty($data['prefix'])) ? $data['prefix'] : null;
        $this->email = (!empty($data['email'])) ? $data['email'] : null;
        $this->tel = (!empty($data['tel'])) ? $data['tel'] : null;
        $this->birth_date = (!empty($data['birth_date'])) ? $data['birth_date'] : null;
        $this->registration_date = (!empty($data['registration_date'])) ? $data['registration_date'] : null;
        $this->nationality = (!empty($data['nationality'])) ? $data['nationality'] : null;
    }

    public function __construct(array $options = null) {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function __set($name, $value) {
        $method = 'set' . $name;
        if (!method_exists($this, $method)) {
            throw new Exception('Invalid Method');
        }
        $this->$method($value);
    }

    public function __get($name) {
        $method = 'get' . $name;
        if (!method_exists($this, $method)) {
            throw new Exception('Invalid Method');
        }
        return $this->$method();
    }

    public function setOptions(array $options) {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    public function getId() {
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }

    public function getMiddle_name() {
        return $this->middle_name;
    }

    public function setMiddle_name($middle_name) {
        $this->middle_name = $middle_name;
        return $this->middle_name;
    }

    public function getBirth_date() {
        return $this->birth_date;
    }

    public function setBirth_date($birth_date) {
        $this->birth_date = $birth_date;
        return $this->birth_date;
    }

    public function getNationality() {
        return $this->nationality;
    }

    public function setNationality($nationality) {
        $this->nationality = $nationality;
        return $this->nationality;
    }
    
    public function getPrefix(){
        return $this->prefix;
    }
    
    public function setPrefix($prefix){
        $this->prefix = $prefix;
        return $this->prefix;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
        return $this->email;
    }
    
    public function getRegistration_date(){
        return $this->registration_date;
    }
    
    public function setRegistration_date($registration_date){
        $this->registration_date = $registration_date;
        return $this->registration_date;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($tel){
        $this->tel = $tel;
        return $this->tel;
    }
}
