<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    //session start here
    session_start();

    //still don't quite get it, but
    //ALL THE CONTACTS must agree with contact.php's session function names

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

        return $app['twig']->render('contact_list.twig', array('contactList' => Contact::getAll()));

    });

    //create (post) a new contact with twig
    //Contact will include 'name' 'phone' and 'address'
    //note this once working and we FIND THE COW
    //$contact is the variable and cow is what twig uses

    $app->post("/new_contact", function() use ($app) {
        $contact = new Contact($_POST['name'], $_POST['phone'], $_POST['address']);
        $contact->save();
        return $app['twig']->render('create_contact.twig', array('cow' => $contact));

    });


    //delete all contacts (from the top of the class declaration)
    //and goto delete_contacts page


    $app->post("/delete_contacts", function() use ($app){
        Contact::deleteAll();
        return $app['twig']->render('delete_contacts.twig');

    });

    return $app;
    ?>
