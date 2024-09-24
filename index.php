<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $font_size = rand(16, 60);
        $custom_paragraph = "<p style='font-size:".$font_size."px'> La dimensione di questo paragrafo è generata casualmente </p>";
        echo $custom_paragraph;
    ?>

</body>
</html>