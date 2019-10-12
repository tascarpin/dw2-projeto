<?php

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


function getEntityManager(){
    
    $config = Setup::createAnnotationMetadataConfiguration(path, true);
    return $entityManager = EntityManager::create(dbParams, $config);

}