<?php

namespace Blog\Model;

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $middle_name;
    
    /**
     * @var string
     */
    private $surname;
    
    /**
     * @var string
     */
    private $prefix;
    
    /**
     * @var date
     */
    private $birth_date;
    
    /**
     * @var date
     */
    private $registration_date;
    
    /**
     * @var string
     */
    private $email_address;
    
    /**
     * @var string
     */
    private $gsm_number;
    
    
    
    /**
     * @param string $name
     * @param string $middle_name
     * @param string $surname
     * @param string $prefix
     * @param date $birth_date
     * @param date $registration_date
     * @param string $email_address
     * @param string $gsm_number
     * @param int|null $id
     */
    public function __construct($name, $middle_name, $surname, $prefix, 
            $birth_date, $registration_date, $email_address, $gsm_number,
            $id = null)
    {
        $this->name = $name;
        $this->middle_name = $middle_name;
        $this->surname = $surname;
        $this->prefix = $prefix;
        $this->birth_date = $birth_date;
        $this->registration_date = $registration_date;
        $this->email_address = $email_address;
        $this->gsm_number = $gsm_number;
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
}