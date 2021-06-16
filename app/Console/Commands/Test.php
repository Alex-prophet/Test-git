<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test command artisan';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       echo 'Ничего ты не знаешь, Джон Сноу!' . PHP_EOL;
       $this->error('Зима близко!');
       $this->info('Зима близко!');
       $this->line('Зима близко!');


    }
}
