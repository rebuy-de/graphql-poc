<?php

namespace App\Types;

use App\Service\NotificationService;
use TheCodingMachine\GraphQLite\Annotations\ExtendType;
use TheCodingMachine\GraphQLite\Annotations\Field;

#[ExtendType(class: \App\Entities\Order::class)]
class OrderType
{
    public function __construct(private NotificationService $notificationService)
    {
    }

    #[Field]
    /**
     * @return string[]
     */
    public function getNotifications(): array
    {
        return $this->notificationService->getNotifications();
    }
}
