<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\Conversion\ConversionRepository;
use App\Repositories\Conversion\ConversionRepositoryInterface;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ConversionRepositoryInterface::class, ConversionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
