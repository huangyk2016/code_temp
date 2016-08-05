<?php

  /**
   *
   */
  class Courier {
       public $name;
       public $home_country;

      public static function getCouriersByCountry($country) {

          echo "s function call.<br/>";
          return $country_list;
      }
        function __construct($argument) {
            echo "Courier __construct<br/>";
            $this->name = $argument;
            echo "<br/>";
            return true;
        }

        public function ship($parcel='')
        {
            echo "<br/>Courier ship()<br/>";
            return true;
        }

        public function calculateShipping($parcel) {
            echo "<br/>Courier calculateShipping()<br/>";
            $rate = 1.78;
            $allMoney = $rate * $parcel->weight;
            return $allMoney;
        }
  }



 ?>
