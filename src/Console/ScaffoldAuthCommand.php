<?php namespace mnshankar\auth\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ScaffoldAuthCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'scaffold:auth';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Add authentication scaffolding for the framework";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $files = new Filesystem;

        $files->copy(__DIR__.'/stubs/scaffold/Http/Controllers/HomeController.php', app_path('Http/Controllers/HomeController.php'));
        $files->copyDirectory(__DIR__.'/stubs/scaffold/Http/Controllers/Auth', app_path('Http/Controllers/Auth'));
        $files->copy(__DIR__.'/stubs/scaffold/Http/routes.php', app_path('Http/routes.php'));

        $files->copy(__DIR__.'/stubs/scaffold/Providers/AppServiceProvider.php', app_path('Providers/AppServiceProvider.php'));

        $files->copyDirectory(__DIR__.'/stubs/scaffold/resources/views', base_path('resources/views'));

        $this->info('Authentication scaffolding complete!');
    }

}
