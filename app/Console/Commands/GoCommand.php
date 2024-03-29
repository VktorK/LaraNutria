<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Like;
use App\Models\Order;
use App\Models\Profile;

use App\Models\Promocode;

use App\Models\Provider;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceUser;
use App\Models\User;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $likes = Like::first();

        dd($likes->users->toArray());

    }
}
