<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MonTestController extends AbstractController
{
    /**
     * @Route("/", name="mon_test")
     */
    public function index(): Response
    {
        return $this->render('mon_test/index.html.twig', [
            'controller_name' => 'MonTestController',
        ]);
    }

    /**
     * @Route("/email-test")
     */
    public function sendEmail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('dagodev261@gmail.com')
            ->to('allintreize20@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        return $this->render('mon_test/index.html.twig', [
            'controller_name' => 'TestMail',
        ]);
    }
}
