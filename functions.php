<?php
function makeGreat($inputString){
    return preg_replace ( "/bad/i", "great", $inputString);
}
?>