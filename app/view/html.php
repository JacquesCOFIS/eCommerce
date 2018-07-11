<?php

$html = '
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="script" href="app/public/css/style.css" >
    <title></title>
</head>
<body>';

// Le html du header
$html.= include VIEW.'/header.php';

// Le html du container
$html.= include VIEW.'/container.php';

// Le html du footer
$html.= include VIEW.'/footer.php';


$html .='
</body>
</html>
';

return $html;