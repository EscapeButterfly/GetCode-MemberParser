<?php

namespace GetCode\MemberParser;

use Illuminate\Support\ServiceProvider;

class MemberParserServiceProvider extends ServiceProvider {
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/../config/gcmparser.php' => config_path('gcmparser.php'),
        ], 'gcmparser-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register() {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/gcmparser.php',
            'gcmparser'
        );
    }
}