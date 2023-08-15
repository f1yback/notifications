<?php

namespace app\notifications;


/**
 * Нотификация пользователей ЛК
 */
class Notification
{

    public function __construct(
        protected BaseClient $client
    ){}

    /**
     * Отправляет уведомление через заданную абстракцию клиента
     * @return bool
     */
    public function send() : bool
    {
        return $this->client->send();
    }

}