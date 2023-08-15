<?php

namespace app\notifications;

use app\helpers\SmsApi;

class SmsClient extends BaseClient
{

    private SmsApi $api;

    /**
     * Первоначальная инициализация
     * @return void
     */
    private function init()
    {
        $this->api = new SmsApi($this->config);
    }

    /**
     * Реализация отправки уведомлений на SMS
     * @return bool
     */
    public function send(): bool
    {
        $this->init();
        return $this->api->send();
    }
}