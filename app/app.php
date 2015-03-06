<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    //add session start here
    //add if statement for array

    //start silex
    $app = new Silex\Application();
    //start twig
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __Dir__.'/../views'
    ));

    //set home with twig
    $app->get("/", function() use($app){

        return $app['twig']->render('contact.php', array('contactList' => Contact::getAll()));

    });

    //create a new contact with twig
    //$app->post("")


    //delete all contacts and goto delete_contacts page
    return $app;
    $app->post("/delete_contacts", function() use ($app){
        Task::deleteAll();
        return $app['twig']->render('delete_contacts.php');

    });

    ?>
