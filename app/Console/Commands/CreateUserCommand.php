<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'user:create {name} {email} {password?}';
    // protected $signature = 'user:create {--verified} {--name=} {--email=} {--password=}';
    protected $signature = 'user:create {--count=} {--verified}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Using Option Instead of Argument

        // $name = $this->option('name');
        // $email = $this->option('email');
        // $password = $this->option('password') ?? Str::random(length:12);

        // $name = $this->argument('name');
        // $email = $this->argument('email');
        // $password = $this->argument('password') ?? Str::random(length:12);

        $count = $this->option('count');
        $bar = $this->output->createProgressBar($count);

        $bar->start();
        for($i = 1 ; $i <= $count;$i++){
            $name = Str::random(length:8);
            $email = $name . '@gmail.com';
            $password = Str::random(length:12);

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
                'email_verified_at' => $this->option('verified') ? now() : null
            ]);
        $bar->advance();
        }
        $bar->finish();

        $this->info(" Successfully created " . $count . " user " );

        // $input['name'] = $this->ask('What is your name?');

        // $input['email'] = $this->ask('What is your email address?');

        // $input['password'] = $this->ask('Provide your secret password?');

        // $input['password'] = Hash::make($input['password']);

        // User::create($input);

        // $this->info("User created successfully");
    }
}
