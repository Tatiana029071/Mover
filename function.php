<?php
function p($data){
    echo "<pre>";
    if (is_array($data)) {
        echo print_r($data,1);
    }
    else {
        echo $data;
}
echo "</pre>";
}

?>