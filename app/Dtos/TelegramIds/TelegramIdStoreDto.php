<?php

namespace App\Dtos\TelegramIds;

class TelegramIdStoreDto
{
    public string $name;
    public string $telegram_id;
    public int $user_id;
    public bool $is_me;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->telegram_id = $data['telegram_id'];
        $this->user_id = $data['user_id'];
        $this->is_me = $data['is_me'];
    }

}
