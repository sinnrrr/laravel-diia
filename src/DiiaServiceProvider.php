<?php

namespace Sinnrrr\Diia;

use Sinnrrr\Diia\Commands\DiiaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiiaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-diia')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-diia_table')
            ->hasCommand(DiiaCommand::class);
    }
}
