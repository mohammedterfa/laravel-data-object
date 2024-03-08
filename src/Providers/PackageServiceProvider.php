<?php
declare(strict_types=1);

namespace MohammedTerfa\DataObject\Providers;

use Illuminate\Support\ServiceProvider;
use MohammedTerfa\DataObjects\Console\Commands\DataTransferObjectMakeCommand;

final class PackageServiceProvider extends ServiceProvider {
    public function boot(): void
    {
        if($this->app->runningInConsole()){
            $this->commands(
                commands: [
                    DataTransferObjectMakeCommand::class,
                ],
            );
        }
    }
}
