<?php

namespace ASTairov\Seat\Vision;

use Illuminate\Support\ServiceProvider;

class VisionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->add_routes();
        $this->add_views();
    }

    /**
     * Include the routes.
     */
    public function add_routes()
    {
        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }
    }

    public function add_views()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'vision');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/vision.config.php', 'vision.config');

        $this->mergeConfigFrom(
            __DIR__ . '/Config/vision.sidebar.php', 'package.sidebar');

        $this->mergeConfigFrom(
            __DIR__ . '/Config/vision.permissions.php', 'web.permissions');
    }
    private function addCommands()
    {
    }
}
