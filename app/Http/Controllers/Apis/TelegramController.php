<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function test()
    {
        $data = [
            'hands' => [
                'Отжимания 3х10',
                'Толчок гири 3х6 24кг',
            ],
            'back' => [
                'Подтягивание (+резина) 3х10',
                'Австралийские подтягивания 3х10'
            ],
            'legs' => [
                'Выпады 3х10 на каждую',
                'Приседания 4х15'
            ],
        ];


        Telegram::bot('mybot')->sendMessage(
            [
                'chat_id' => '442040222',
                'text' => $data['legs'][random_int(0, count($data['hands']) - 1)]
            ]
        );
    }
}
