<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Liip\FunctionalTestBundle\LiipFunctionalTestBundle::class => ['all' => true],
    Liip\TestFixturesBundle\LiipTestFixturesBundle::class => ['all' => true],
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true]
];
