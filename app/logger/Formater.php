<?php


namespace App\logger;


use Core\logger\FormaterInterface;

class Formater implements FormaterInterface
{

    /**
     * Этот метод будет приводить логи в нужный формат перед записью
     * Формат записи должен быть примерно следующим:  ДАТА УРОВЕНЬ СООБЩЕНИЕ КОНТЕКСТ
     */

    public static function format($level, $message, $context)
    {
        $log = $context['dateTime'] . ' -> ' . $level . ' -> ' . $message . ' -> ' . $context['file'] . PHP_EOL;
        return $log;
    }
}