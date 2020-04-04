<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use LinkPreview\LinkPreview;

class ExperimentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Experimental Command';

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
        $linkPreview = new LinkPreview('https://www.lynda.com/');
        $parsed = $linkPreview->getParsed();
        foreach ($parsed as $parserName => $link) {
//            echo $parserName . PHP_EOL . PHP_EOL;
            echo $link->getUrl() . PHP_EOL;
            echo $link->getRealUrl() . PHP_EOL;
            echo $link->getTitle() . PHP_EOL;
            echo $link->getDescription() . PHP_EOL;
            echo $link->getImage() . PHP_EOL;
//            print_r($link->getPictures());
        }
    }
}
