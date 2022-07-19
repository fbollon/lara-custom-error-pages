<?php

namespace Fbollon\LaraCustomErrorPages;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fbollon\LaraCustomErrorPages\Commands\LaraCustomErrorPagesCommand;

class LaraCustomErrorPagesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lara-custom-error-pages')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lara-custom-error-pages_table')
            ->hasCommand(LaraCustomErrorPagesCommand::class);
    }
}
