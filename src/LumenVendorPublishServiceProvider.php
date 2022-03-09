<?php

namespace LumenVendorPublish;

use Illuminate\Support\ServiceProvider;
use LumenVendorPublish\Console\Commands\VendorPublishCommand;

class LumenVendorPublishServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                VendorPublishCommand::class
            ]);
        }
    }

    public function register()
    {
        
    }
}
