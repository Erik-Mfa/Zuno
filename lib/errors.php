<?php 
function error_handler($e){
    switch($e){
        case 'wronguser':   
            $msg = "<p class='row justify-content-center text-danger'>usuário não existe!</p>";
            break;
    }
    return $msg; 
}

?>
