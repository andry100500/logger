<?php


namespace Core\logger;


interface WriterInterface
{

    public static function write($level, $message, $context);
}