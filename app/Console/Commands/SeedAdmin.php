<?php

namespace App\Console\Commands;

use Database\Seeders\DefaultAdminSeeder;
use Illuminate\Console\Command;

class SeedAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a default Admin Account';

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
     * @return int
     */
    public function handle()
    {
        new DefaultAdminSeeder;
    }
}
