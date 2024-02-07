<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\TelegramId;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfilePage(Request $request)
    {
        $user = User::query()->find(auth()->id())->toArray();
        $telegrams = TelegramId::query()->where('user_id', auth()->id())->get()->toArray();

        return view('profile.index', ['user' => $user, 'telegrams' => $telegrams]);
    }
}
