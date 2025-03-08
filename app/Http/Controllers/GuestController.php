<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGuestRequest;
use App\Service\GuestService;
use Illuminate\Http\JsonResponse;

class GuestController extends Controller
{
    protected GuestService $guestService;

    public function __construct(GuestService $guestService)
    {
        $this->guestService = $guestService;
    }

    public function create(CreateGuestRequest $request): JsonResponse
    {
        $data = $request->validated();
        $guest = $this->guestService->createGuest($data);

        return response()->json($guest);
    }
}
