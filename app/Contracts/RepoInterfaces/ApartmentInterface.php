<?php

namespace App\Contracts\RepoInterfaces;


interface ApartmentInterface extends AbstractInterface
{
    public function getBySlug($slug);
}