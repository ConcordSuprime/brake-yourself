<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\TelegramId;
use Illuminate\Http\Request;

class TelegramIdController extends Controller
{
    public function getTelegramIds()
    {
        $telegrams = TelegramId::query()->where('user_id', auth()->id())->get()->toArray();
    }

    public function create(Request $request)
    {
        $id = auth()->id();
        $data = $request->all();
        $data['user_id'] = $id;
        TelegramId::query()->create($data);
        return redirect('profile.me');
    }

    public function delete()
    {

    }
}
