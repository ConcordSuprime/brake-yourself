<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfilePage(Request $request)
    {
        $user = User::query()->find(auth()->id())->toArray();
        return view('profile.index', ['user' => $user]);
    }
}
