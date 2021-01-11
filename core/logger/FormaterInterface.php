<?php


namespace Core\logger;


interface FormaterInterface
{
    public static function format($level, $message, $context);
}