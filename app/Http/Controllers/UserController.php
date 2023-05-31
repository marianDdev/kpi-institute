<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function store(StoreUserRequest $request): JsonResponse
    {
        $validated = $request->validated();
        User::create($validated);

        return response()->json('User successfully crested', 201);
    }
}
