<?php
    require( __DIR__.'/../Core/Kernel.php' );
    $kernel = new Kernel();
    use Module\Core\Controller\DefaultController;
    $instance = new DefaultController();
    print_r($instance->index());
    print_r($kernel->loadRoute(true));
?>