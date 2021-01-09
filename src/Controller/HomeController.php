<?php

namespace App\Controller;

use Manager\Application\Appointment\GetAppointments;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private const TEMPLATE = 'home/index.html.twig';

    private GetAppointments $getAppointments;

    public function __construct(GetAppointments $getAppointments)
    {
        $this->getAppointments = $getAppointments;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $appointments = $this->getAppointments->handle();

        return $this->render(self::TEMPLATE, [
            'appointments' => $appointments
        ]);
    }
}
