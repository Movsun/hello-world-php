<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="font-size: <?php 
    function foo() {
        static $x = 12;
        $x++;
        echo $x;
    }
    foo();
?>px;">
    <?php
        $name = "my world";
        echo "Hello $name";
    ?>
</body>
</html>