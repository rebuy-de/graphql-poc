<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use TheCodingMachine\GraphQLite\Bundle\GraphQLiteBundle;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
