<?php

function validateDataIsNotNull(...$data) {
    
    $isValid = true;

    foreach ($data as $item) {
        if($item == null) $isValid = false;
    }

    return $isValid;

}

?>