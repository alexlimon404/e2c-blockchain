<?php

namespace App\Console\Commands;

use App\Http\Controllers\Api\E2CController;
use Illuminate\Console\Command;

class GetPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    public function handle(E2CController $price)
    {
        return $price->getWallet();

    }
}
