<?php
$processedResult = "";
// TEST POST HERE
if(isset($_POST)){
    //CALL PHP FUNCTION TO PROCESS

    print_r($_POST);
}else{
    //header('ajaxTempalate.php');
    echo false;
}
?>