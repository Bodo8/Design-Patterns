<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 07.08.2018
 * Time: 06:19
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


abstract class CommunicationManager
{
    abstract public function getHeaderText(): string;

    abstract public function getAppointmentEncoder(): AppointmentEncoder;

    abstract public function getToDoEncoder(): ToDoEncoder;

    abstract public function getContactEncoder(): ContactEncoder;

    abstract public function getFooterText(): string;

}