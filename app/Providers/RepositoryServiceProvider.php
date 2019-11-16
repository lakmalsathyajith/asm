<?php

namespace App\Providers;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Contracts\RepoInterfaces\ContentInterface;
use App\Contracts\RepoInterfaces\UserInterface;
use App\Repos\ApartmentRepository;
use App\Repos\ContentRepository;
use App\Repos\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // All repo interface bindings goes here
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(ApartmentInterface::class, ApartmentRepository::class);
        $this->app->bind(ContentInterface::class, ContentRepository::class);
    }
}
