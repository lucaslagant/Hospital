<!-- Affichage d'un message d'erreur personnalisé -->
<?php 
if(!empty($msgCode) || $msgCode = trim(filter_input(INPUT_GET, 'msgCode', FILTER_SANITIZE_STRING))) {
    if(!array_key_exists($msgCode, $displayMsg)){
        $msgCode = 0;
    }
    echo '<div class="alert '.$displayMsg[$msgCode]['type'].'">'.$displayMsg[$msgCode]['msg'].'</div>';
} ?>
<!-- -------------------------------------------- -->