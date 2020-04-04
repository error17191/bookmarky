<?php

namespace App\Console\Commands;

use App\Bookmark;
use App\Tag;
use App\User;
use Illuminate\Console\Command;

class SeedFakeData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:fake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds some fake data';

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
        $users = factory(User::class, 10)->create();
        $users->push(factory(User::class)->create([
            'email' => 'mohamed@mail.com'
        ]));
//        foreach ($users as $user) {
//            $tags = factory(Tag::class, 10)->create([
//                'user_id' => $user->id
//            ]);
//            $bookmarks = factory(Bookmark::class, 100)->create([
//                'user_id' => $user->id
//            ]);
//
//            foreach ($bookmarks as $bookmark) {
//                $bookmark->tags()->attach($tags->shuffle()->take(rand(0, 3)));
//            }
//        }
    }
}
