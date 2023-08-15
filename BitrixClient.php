<?php

namespace app\notifications;

use app\helpers\BitrixApi;

class BitrixClient extends BaseClient
{

    private BitrixApi $api;

    /**
     * Первоначальная инициализация
     * @return void
     */
    private function init()
    {
        $this->api = new BitrixApi($this->config);
    }

    /**
     * Реализация отправки уведомлений в Битрикс24
     * @return bool
     */
    public function send(): bool
    {
        $this->init();
        return $this->api->send();
    }
}