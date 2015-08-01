<?php

/**
 * Created by PhpStorm.
 * User: nshankar
 * Date: 7/28/2015
 * Time: 9:19 AM
 */

namespace mnshankar\auth;

use Illuminate\Support\ServiceProvider;
use mnshankar\auth\Console\ScaffoldAuthCommand;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    public function register()
    {
        $this->app->singleton('scaffold.auth', function()
        {
            return new ScaffoldAuthCommand;
        });
        $this->commands('scaffold.auth');
    }
    public function provides()
    {
        return array('scaffold.auth');
    }
}