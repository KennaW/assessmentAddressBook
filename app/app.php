<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    //session start here
    session_start();

    //if statement for array that I don't completely understand yet
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

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

    //create (post) a new contact with twig
    //Contact will include 'name' 'phone' and 'address'
    //note this once working

    $app->post("/new_contact", function() use ($app) {
        $contact = new Contact($_POST['name'], $_POST['phone'], $_POST['address']);
        $contact->save();
        return $app['twig']->render('create_contact.php', array('all_the_contacts' => $contact));

    });


    //delete all contacts and goto delete_contacts page

    $app->post("/delete_contacts", function() use ($app){
        Task::deleteAll();
        return $app['twig']->render('delete_contacts.php');

    });

    return $app;
    ?>
