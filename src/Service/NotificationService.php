<?php

namespace App\Service;

class NotificationService
{
    public function getNotifications(): array
    {
        return [
            'You have a new order',
            'Your order has been shipped'
        ];

    }
}
