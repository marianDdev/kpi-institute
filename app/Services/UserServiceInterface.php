<?php

namespace App\Services;

use App\Models\User;

interface UserServiceInterface
{
    public function sendEmail(User $user): void;
}
