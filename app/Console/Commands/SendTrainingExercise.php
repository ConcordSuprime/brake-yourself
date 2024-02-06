<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendTrainingExercise extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:training';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
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
                'text' => $data['legs'][random_int(0, count($data['legs']) - 1)]
            ]
        );

        return Command::SUCCESS;
    }
}
