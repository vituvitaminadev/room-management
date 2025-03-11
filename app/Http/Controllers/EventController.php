<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Service\EventService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected EventService $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function create(CreateEventRequest $request): JsonResponse
    {
        $data = $request->validated();
        $event = $this->eventService->create($data);

        return response()->json($event);
    }
}
