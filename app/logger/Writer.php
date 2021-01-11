<?php


namespace App\logger;

use Core\logger\WriterInterface;
use App\logger\Formater;


class Writer implements WriterInterface
{

    /**
     * этот метод должен записывать логи в хранилище, например в файл
     */
    public static function write($level, $message, $context)
    {

        $log = Formater::format($level, $message, $context);
        file_put_contents('storage/logs/logs.txt', $log, FILE_APPEND | LOCK_EX);

    }

}