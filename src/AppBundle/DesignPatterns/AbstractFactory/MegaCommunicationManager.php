<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 09.08.2018
 * Time: 06:30
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


class MegaCommunicationManager extends CommunicationManager
{

    public function getHeaderText(): string
    {
        return 'Header Megacalendar format';
    }

    public function getAppointmentEncoder(): AppointmentEncoder
    {
        return new MegaAppointEncoder();
    }

    public function getFooterText(): string
    {
        return 'Footer Megacalendar format';
    }
}