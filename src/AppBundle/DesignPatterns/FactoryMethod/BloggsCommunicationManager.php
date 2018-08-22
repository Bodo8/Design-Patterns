<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 07.08.2018
 * Time: 06:22
 */

namespace AppBundle\DesignPatterns\FactoryMethod;


class BloggsCommunicationManager extends CommunicationManager
{

    public function getHeaderText(): string
    {
        return 'Header format BloggsCalendar';
    }

    public function getAppointmentEncoder(): AppointmentEncoder
    {
        return new BloggsAppointEncoder();
    }

    public function getFooterText(): string
    {
        return 'Footer BloggsCalendar';
    }
}
