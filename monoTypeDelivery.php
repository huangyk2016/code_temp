<?php

require "Courier.php"
/**
 *
 */
class monoTypeDelivery extends Courier
{

    public function ship($parcel) {
        echo "<br/>monoTypeDelivery calculateShipping()<br/>";

        return true;
    }

    
}




 ?>
