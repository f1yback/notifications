<?php

namespace app\notifications;

abstract class BaseClient
{
    /**
     * @param array $config - массив конфигураций и данных для клиента
     */
    public function __construct(
        protected array $config
    ){}

    /**
     * Метод отправки уведомления в заданном клиенте
     * @return bool
     */
    abstract public function send() : bool;

}