<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 13.08.2018
 * Time: 08:06
 */

namespace AppBundle\DesignPatterns\AbstractFactory;


class ObjectAssembler
{
    private $components = [];

    public function __construct(string $configPath)
    {
        $this->configure($configPath);
    }

    private function configure(string $configPath)
    {
        $data = simplexml_load_file($configPath);
        foreach ($data->class as $class) {
            $args = [];
            $name = (string)$class['name'];
            foreach ($class->arg as $arg) {
                $argClass = (string)$arg['instance'];
                $args[(int)$arg['num']] = $argClass;
            }
            ksort($args);
            $this->components[$name] = function () use ($name, $args) {
                $expandedArgs = [];
                foreach ($args as $arg) {
                    $expandedArgs[] = new $arg();
                }
                $reflectionClass = new \ReflectionClass($name);
                return $reflectionClass->newInstanceArgs($expandedArgs);
            };
        }
    }


    public function getComponent(string $class)
    {
        if (!isset($this->components[$class])) {
            throw new \Exception('unknown component: "$class"');
        }
        $component = $this->components[$class]();
        return $component;
    }

}

$assembler = new ObjectAssembler('config.xml');
$appointmentMaker = $assembler->getComponent('AppointmentMarker');
$out = $appointmentMaker->makeAppointment();
print $out;