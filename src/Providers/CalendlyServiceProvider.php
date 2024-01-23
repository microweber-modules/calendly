<?php

namespace MicroweberPackages\Modules\Calendly\Providers;

use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use MicroweberPackages\Module\Facades\ModuleAdmin;
use MicroweberPackages\Modules\Calendly\Http\Livewire\CalendlySettingsComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class CalendlyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('microweber-module-calendly');
        $package->hasViews('microweber-module-calendly');
    }


    public function register(): void
    {
        parent::register();

        Livewire::component('microweber-module-calendly::settings', CalendlySettingsComponent::class);
        ModuleAdmin::registerSettings('calendly', 'microweber-module-calendly::settings');

    }
}
