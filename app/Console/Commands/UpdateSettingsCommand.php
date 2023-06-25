<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Setting;

class UpdateSettingsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:youtube {link} {s} {e}';

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
     * @return int
     */
    public function handle()
    {
        $settings = Setting::first();
        $arguments = $this->arguments();

        $values = json_decode($settings->values);

        $values->latest = $arguments['link'];
        $values->season = $arguments['s'];
        $values->episode = $arguments['e'];

        $settings->values = json_encode($values);
        $settings->save();

        return 0;
    }
}
