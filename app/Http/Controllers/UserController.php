<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Services\FileServiceInterface;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UserController extends Controller
{
    public function store(
        StoreUserRequest $request,
        FileServiceInterface $fileService
    ): BinaryFileResponse|RedirectResponse
    {
        $validated = $request->validated();
        $user      = User::create($validated);

        if (is_null($user)) {
            return redirect('/')->with(
                'status',
                'Something went wrong. try again'
            );
        }

        return $fileService->download(
            public_path() . '/brochure.pdf',
            'TKI-Membership-Brochure.pdf',
            ['Content-Type: application/pdf']
        );
    }
}
