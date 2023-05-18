<?php

namespace Employee;

class Employee {
    private $id;
    
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $address;
    private $jobTitle;

    public function __construct($id,$firstName, $lastName, $dateOfBirth, $address, $jobTitle) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->jobTitle = $jobTitle;
    }
    public function getId(){
        return $this->id;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setJobTitle($jobTitle) {
        $this->jobTitle = $jobTitle;
    }
}
