<?php

    class Contact
    {
        private $name;
        private $phone;
        private $address;

        //

        function __construct($name, $phone, $address)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }

        //setters n getters
        //sets must have an agreeing name
        //sets must also declare int or string

        function setName($name)
        {
            $this->name = (string) $name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPhone($phone)
        {
            $this->phone = (string) $phone;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setAddress($address)
        {
            $this->address = (string) $address;
        }

        function getAddress()
        {
            return $this->address;
        }

        //function to save session to array
        function save()
        {
            array_push($_SESSION['all_the_contacts'], $this);
        }

        //STATIC function to retrieve contacts of session array
        static function getALL()
        {
            return $_SESSION['all_the_contacts'];
        }

        //STATIC function to delete contents of array
        static function deleteALL()
        {
            $_SESSION['all_the_contacts'] = array();
        }
    }
?>
