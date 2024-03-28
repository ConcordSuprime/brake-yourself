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

        $exercise = [
            'Отжимания от пола',
            'Толчок гири',
            'Подтягивание (+резина)',
            'Австралийские подтягивания',
            'Выпады',
            'Приседания',
        ];

        Telegram::bot('mybot')->sendMessage(
            [
                'chat_id' => '442040222',
                'text' => $exercise[random_int(0, count($exercise) - 1)]
            ]
        );

        return Command::SUCCESS;
    }
}
