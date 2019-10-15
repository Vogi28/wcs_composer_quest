<?php
    require_once '../vendor/autoload.php';

    use App\wcs\Hello;
    use HelloWorld\SayHello;

    echo SayHello::world();
    echo '<br>';
    $hello = new Hello();
    echo $hello->talk();
