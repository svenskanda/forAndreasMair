<?php

// bootstrap.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

    $isDevMode = true;
    $paths = array("/entities");

    $conn = array(

        "driver" => "pdo_mysql",
        "user" => "singlesimlaendle",
        "password" => "singles"

    );

    $config = Setup::createAnnotationMetadataConfiguration($paths, isDevMode);

    $config ->setMetadatDriverIpml(

        new Doctrine\ORM\Mapping\Driver\AnnotationDriver(

            new Doctrine\Common\Annotation\CachedReader(


                new Doctrine\Common\Annotation\AnnotationReader(),
                new Doctrine\Common\Cache\ArrayCache()
            ),
            $paths

        )

    );



    $entityManager = EntityManager::create($conn, $config);

?>