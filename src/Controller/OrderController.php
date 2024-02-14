<?php

namespace App\Controller;
use App\Entities\Order;
use App\Types\OrderType;
use GraphQL\Type\Definition\ResolveInfo;
use TheCodingMachine\GraphQLite\Annotations\Query;
use TheCodingMachine\GraphQLite\Annotations\Security;

class OrderController
{
    #[Query]
    /**
     * @return Order[]
     */
    public function getOrders( ResolveInfo $info, ?int $page = 10, ?int $pageIndex = 1): array
    {
        return [
            new Order(1), new Order(2)
        ];
    }

    #[Query]
    #[Security('is_granted("ROLE_USER")')]
    public function getOrder(int $id): Order
    {
        return new Order($id);
    }
}
