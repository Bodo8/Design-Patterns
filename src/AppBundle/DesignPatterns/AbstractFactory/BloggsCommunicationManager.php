<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 07.08.2018
 * Time: 06:22
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


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

    public function getToDoEncoder(): ToDoEncoder
    {
        return new BloggsToDoEncoder();
    }

    public function getContactEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder();
    }
}
