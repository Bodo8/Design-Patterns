<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 26.07.2018
 * Time: 17:24
 */

namespace AppBundle\reflectionUtil;


class ReflectionUtil
{
    public static function getClassSource(\ReflectionClass $class): string
    {
        $path = $class->getFileName();
        $lines = file($path);
        $from = $class->getStartLine();
        $to = $class->getEndLine();
        $len = $to - $from + 1;
        return implode(array_slice($lines, $from - 1, $len));
    }
}

print ReflectionUtil::getClassSource
(
    new \ReflectionClass('AppBundle\model\CDProduct')
);

