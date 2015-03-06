<?php

    class Contact
    {
        private $name;
        private $phone;
        private $address;

        //

        function __construct($name, $phone="555-555-5555", $address="HERE")
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }

        //setters n getters

        function setName()
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPhone()
        {
            $this->phone = $new_phone;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setAddress()
        {
            $this->address = $new_addy;
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
