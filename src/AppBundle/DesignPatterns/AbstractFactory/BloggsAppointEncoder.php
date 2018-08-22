<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 07.08.2018
 * Time: 06:28
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


class BloggsAppointEncoder extends AppointmentEncoder
{

    public function encode(): string
    {
        return 'Data appointment in format BloggsCalenrdar';
    }
}