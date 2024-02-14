<?php

namespace App\Entities;

use TheCodingMachine\GraphQLite\Annotations\Autowire;
use TheCodingMachine\GraphQLite\Annotations\Field;
use TheCodingMachine\GraphQLite\Annotations\Type;

use App\Service\NotificationService;

#[Type]
class Order
{
    public function __construct(private int $id)
    {
    }

    #[Field]
    public function getId(): int
    {
        return $this->id;
    }

    #[Field]
    public function getUser(): User
    {
        return new User(1, 'John Doe');
    }


}
