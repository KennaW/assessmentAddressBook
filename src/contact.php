<?php

    class Contact
    {
        private $name;
        private $phone;
        private $address;

        function __construct($name, $phone="555-555-5555", $address="HERE")
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }

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
    }
