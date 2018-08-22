<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 12.08.2018
 * Time: 20:05
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


class AppointmentMarker
{
    private $appointmentEncoder;

    public function __construct(AppointmentEncoder $appointmentEncoder)
    {
        $this->appointmentEncoder = $appointmentEncoder;
    }

    public function makeAppointmentEncoder()
    {
        return $this->appointmentEncoder->encode();
    }

}