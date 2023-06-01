<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);

        if (!is_null($user)) {
            $path = public_path() . '/brochure.pdf';
            $headers = array(
                'Content-Type: application/pdf',
            );
            return response()->download($path, 'TKI-Membership-Brochure.pdf', $headers);
        }

        return redirect('/')->with('status', 'Something went wrong. try again');
    }
}
