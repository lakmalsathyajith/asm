<?php

namespace App\Repos;


use App\Contracts\RepoInterfaces\BookingInterface;
use App\Entities\Booking;

class BookingRepository extends AbstractRepository implements BookingInterface
{
    public function __construct(
        Booking $model
    )
    {
        parent::__construct($model);
    }
}