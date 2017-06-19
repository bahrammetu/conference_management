<?php

namespace Landing\Model;

class UserTable implements UserTableInterface
{
    private $data = [
        1 => [
            'id'    => 1,
            'name' => 'user_1_name',
            'middle_name'  => '',
            'surname'  => 'user_1_surname',
            'prefix'  => 'user_1_prefix',
            'birth_date'  => '1980-01-01',
            'registration_date'  => '2017-07-01',
            'email_address'  => 'user_1@umtik.com',
            'gsm_number'  => '0090 555 8888',
        ],
        2 => [
            'id'    => 2,
            'name' => 'user_2_name',
            'middle_name'  => '',
            'surname'  => 'user_2_surname',
            'prefix'  => 'user_2_prefix',
            'birth_date'  => '1980-01-02',
            'registration_date'  => '2017-07-02',
            'email_address'  => 'user_2@umtik.com',
            'gsm_number'  => '0090 555 8889',
        ],
        3 => [
            'id'    => 3,
            'name' => 'user_3_name',
            'middle_name'  => '',
            'surname'  => 'user_3_surname',
            'prefix'  => 'user_3_prefix',
            'birth_date'  => '1980-01-03',
            'registration_date'  => '2017-07-03',
            'email_address'  => 'user_3@umtik.com',
            'gsm_number'  => '0090 555 8890',
        ]
    ];
    
    
    /**
     * {@inheritDoc}
     */
    public function findAllUsers()
    {
        return array_map(function ($user) {
            return new User(
                $user['name'],
                $user['middle_name'],
                $user['surname'],
                $user['prefix'],
                $user['birth_date'],      
                $user['registration_date'],
                $user['email_address'],              
                $user['gsm_number']
            );
        }, $this->data);
        
        print_r($user->email_address);
    }

    /**
     * {@inheritDoc}
     */
    public function findUser($id)
    {
        if (! isset($this->data[$id])) {
            throw new DomainException(sprintf('User by id "%s" not found', $id));
        }

        return new User(                
            $this->data[$id]['name'],
            $this->data[$id]['surname'],
            $this->data[$id]['email_address'],
            $this->data[$id]['registration_date'],
            $this->data[$id]['id']
        );
    }
}
