<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 09.08.2018
 * Time: 06:34
 */

namespace AppBundle\DesignPatterns\FactoryMethod;


class MegaAppointEncoder extends AppointmentEncoder
{

    public function encode(): string
    {
        return 'Data appointment in format MegaCalenrdar';
    }
}