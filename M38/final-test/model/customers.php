<?php

class CustomerModel
{
    private $customerID;
    private $emailAddress;
    private $name;
    private $password;
    private $phone;

    public function __construct($customerID, $emailAddress, $name, $password, $phone){
        $this->customerID = $customerID;
        $this->emailAddress = $emailAddress;
        $this->name = $name;
        $this->password = $password;
        $this->phone = $phone;
    }

    //get function
    public function getCustomerID(){
        return $this->customerID;
    }

    public function getEmailAddress(){
        return $this->emailAddress;
    }

    public function getName(){
        return $this->name;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getPhone(){
        return $this->phone;
    }

    //set function
    public function setCustomerID($customerID){
        $this->customerID = $customerID;
    }

    public function setEmailAddress($emailAddress){
        $this->emailAddress = $emailAddress;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }
}