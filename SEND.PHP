<?php
    $header = "MIME-Version:1.0\r\n";
    $header .= 'From Isiflow.educ';
    $header .= 'Content-Type:text/html; charset=utf-8'."\n";
    $header .= 'Content-Transfer-Encoding: 8bit';

    $message ='
    <!DOCTYPE html>
<html lang="fr">
<body>
    <div align="center">
    Merci à vous!
    </div>
</body>
</html>';

mail("richmanasombe@gmail.com", "Salut test", $message, $header);




?>