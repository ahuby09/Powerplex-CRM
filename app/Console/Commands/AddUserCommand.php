<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AddUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

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
        $user =  $this->ask("username");
        $email = $this->ask("email");
        $password = $this->secret("password");

        User::create([
            "name" => $user,
            "email" => $email,
            "password" => Hash::make($password),
            "verified_at" => Carbon::now(),
        ]);
    }
}
