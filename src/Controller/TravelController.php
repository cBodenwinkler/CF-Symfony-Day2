<?php

namespace App\Controller;

use App\Entity\Trips;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    /**
     * @Route("/home", name="home_page")
     */
    public function home(): Response
    {
        return $this->render('travel/home.html.twig', [
            'controller_name' => 'TravelController',
        ]);
    }
    /**
     * @Route("/home", name="home_page")
     */
    public function homeAction()
    {
        $trips = $this->getDoctrine()
            ->getRepository(Trips::class)
            ->findAll(); // this variable $products will store the result of running a query to find all the products
        return $this->render('travel/home.html.twig', array("trips" => $trips)); // i send the variable that have all the products as an array of objects to the index.html.twig page
    }





    
    /**
     * @Route("/about", name="about_page")
     */
    public function about(): Response
    {
        return $this->render('travel/about.html.twig', [
            'controller_name' => 'TravelController',
        ]);
    }






    /**
     * @Route("/news", name="news_page")
     */
    public function news(): Response
    {
        return $this->render('travel/news.html.twig', [
            'controller_name' => 'TravelController',
        ]);
    }






    /**
     * @Route("/contact", name="contact_page")
     */
    public function contact(): Response
    {
        return $this->render('travel/contact.html.twig', [
            'controller_name' => 'TravelController',
        ]);
    }






    /**
     * @Route("/create", name="createAction")
     */
    public function createAction()
    {

        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();
        $trip = new Trips(); // here we will create an object from our class Product.
        $trip->setName('London'); // in our Product class we have a set function for each column in our db
        $trip->setImage("https://images.unsplash.com/photo-1505761671935-60b3a7427bad?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
        $trip->setDescription("I am a description - I say nothing and I do even less, less, less, less, less, less, less, less, less, less, less, less, less, less, less");
        $trip->setPrice(150);

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($trip);
        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        return new Response('Saved new Trip with id ' . $trip->getId());
    }





    /**
     * @Route("/home/{tripId}", name="detailsAction")
     */
    public function showdetailsAction($tripId)
    {
        $trip = $this->getDoctrine()
            ->getRepository(Trips::class)
            ->find($tripId);

        if (!$trip) {
            throw $this->createNotFoundException(
                'No product found for id ' . $tripId
            );
        } else {
            return new Response('
                <html>
                    <head>
                        <meta charset="UTF-8">
                        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
                    </head>
                    <body>
                    <div  class="container d-flex justify-content-center">
                     <div class="card col-12 my-3" style="width:18rem">
                        <img src=' . $trip->getImage() . ' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title">' . $trip->getName() . '</h1>
                            <p class="card-text">' . $trip->getDescription() . '</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Price:' . $trip->getPrice() . '</li>
                        </ul>
                    </div>
                    </div>
                    </body>
                ');
        }

    }
}
