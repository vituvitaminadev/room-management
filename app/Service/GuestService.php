<?php

namespace App\Service;

use App\Models\Guest;

class GuestService
{
    public function createGuest(array $data): Guest
    {
        return Guest::create($data);
    }
}
