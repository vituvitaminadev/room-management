<?php

namespace App\Service;

use App\Models\Guest;

class GuestService
{
    public function create(array $data): Guest
    {
        return Guest::create($data);
    }
}
