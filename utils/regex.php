<?php
define("REGEX_NO_NUMBER", "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '\-]+$/");
define("REGEX_NUMBER", "/[\p{N}-]+$/");
define("REGEX_EMAIL","/^[[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-.]?[[:alnum:]])*\.([a-z]{2,4})$/");
define("REGEX_PHONE","/^0[1-68][0-9]{8}$/");
define("REGEX_DATE","/^\d{4}\-(0[1-9]|1[0-2])\-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):([0-5][0-9])$/")
?>