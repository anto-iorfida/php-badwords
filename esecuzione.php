<?php
$textArea = $_GET['textUser'];
$parolaCensurata = $_GET['parolaCensurata'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2><?php echo $textArea . ' ' . 'Lughezza stringa:'. ' '. strlen($textArea); ?> </h2>
    <h2><?php echo str_replace($parolaCensurata,'***',$textArea); ?></h2>
</body>
</html>
