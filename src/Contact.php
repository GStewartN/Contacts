<?php
    class Contact
    {
      private $first_name;
      private $last_name;
      private $phone_number;
      private $address;
    }

    function __construct($first_name, $last_name, $phone_number, $address)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone_number = $phone_number;
        $this->address = $address;
    }
 ?>
