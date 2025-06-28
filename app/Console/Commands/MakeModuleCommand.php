<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeModuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new module structure';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $modulePath = app_path("Modules/{$name}");

        if (File::exists($modulePath)) {
            $this->error("Module '{$name}' already exists!");

            return 1;
        }

        // Struktur directory
        $folders = [
            'Controllers',
            'Services',
            'Repositories',
            'Requests',
            'Routes',
        ];

        foreach ($folders as $folder) {
            File::makeDirectory("{$modulePath}/{$folder}", 0755, true);
        }

        // Buat file default route
        File::put("{$modulePath}/Routes/api.php", "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\nRoute::prefix('v1')->group(function () {\n    // Route module {$name}\n});\n");

        $this->info("Module '{$name}' created successfully.");

        return 0;
    }
}
