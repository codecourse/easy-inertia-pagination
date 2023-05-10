<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('User/Index', [
            'users' => UserResource::collection(
                User::latest()->paginate(10)
            ),
        ]);
    }
}
