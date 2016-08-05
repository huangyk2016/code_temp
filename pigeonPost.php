<?php

// require './courier.php';
/**
 *
 */
class pigeonPost extends Courier
{

    function __construct($param) {
        echo "pigeonPost __construct<br/>";
        $this->name = "pigeonPost name";
        echo "<br/>";
    }
    public function ship($parcel='') {
        echo "<br/>pigeonPost calculateShipping()<br/>";
        return true;
    }
}


 ?>
