<?php
    class Contact
    {
        private $first_name;
        private $last_name;
        private $phone_number;
        private $address;
        private $image;

        function __construct($first_name, $last_name, $phone_number, $address, $image)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->phone_number = $phone_number;
            $this->address = $address;
            $this->image = $image;
        }

        function setFirstName($new_first_name)
        {
            $this->first_name = (string) $new_first_name;
        }

        function getFirstName()
        {
            return $this->first_name;
        }

        function setLastName($new_last_name)
        {
            $this->last_name = (string) $new_last_name;
        }

        function getLastName()
        {
            return $this->last_name;
        }

        function setPhoneNumber($new_phone_number)
        {
            $this->phone_number = (string) $new_phone_number;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function setAddress($new_address)
        {
            $this->address = (string) $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }

        function setImage($new_image)
        {
            $this->image = (string) $new_image;
        }

        function getImage()
        {
            return $this->image;
        }

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
