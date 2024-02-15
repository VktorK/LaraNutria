<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Order;
use App\Models\Profile;
<<<<<<< HEAD
use App\Models\Promocode;
=======
>>>>>>> origin/main
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
<<<<<<< HEAD
        $promocodes = Promocode::find(10);
        dd($promocodes->user->toArray());
=======
        $post = User::first();
        dd($post->orders->toArray());
>>>>>>> origin/main
    }
}
