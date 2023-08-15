<?php

namespace app\notifications;

use Yii;

class EmailClient extends BaseClient
{

    /**
     * Реализация отправки уведомлений на почту
     * @return bool
     */
    public function send(): bool
    {
        return Yii::$app->mailer->compose()
            ->setFrom($this->config['from'])
            ->setTo($this->config['to'])
            ->setSubject($this->config['subject'])
            ->setHtmlBody($this->config['body'])
            ->send();
    }
}