<?php
namespace App\Services;

use App\Contracts\LoggerInterface;

class FileLogger implements LoggerInterface
{
    public function log(string $message)
    {
        file_put_contents(storage_path('logs/app.log'), $message . PHP_EOL, FILE_APPEND);
    }
}