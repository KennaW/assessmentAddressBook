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

    //set home with twig to contact list
    $app->get("/", function() use($app){

        return $app['twig']->render('contact_list.php', array('contactList' => Contact::getAll()));

    });

    //create a new contact with twig
    //Contact will include 'name' 'phone' and 'address'
    //note this once working

    $app->post("/new_contact", function() use ($app) {
        $contact = new Contact($_POST['name'], $_POST['phone'], $_POST['address']);
        $contact->save();
        return $app['twig']->render('create_contact.php', array('contact_array' => $contact));

    });


    //delete all contacts and goto delete_contacts page
    return $app;
    $app->post("/delete_contacts", function() use ($app){
        Task::deleteAll();
        return $app['twig']->render('delete_contacts.php');

    });

    ?>
