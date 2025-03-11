<?php

namespace App\Service;

use App\Models\Event;

class EventService
{
    public function create(array $data): Event
    {
        return Event::create($data);
    }
}
