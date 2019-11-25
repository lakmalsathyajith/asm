<?php

namespace App\Providers;

use App\Contracts\RepoInterfaces\ApartmentInterface;
use App\Contracts\RepoInterfaces\BookingInterface;
use App\Contracts\RepoInterfaces\ContentInterface;
use App\Contracts\RepoInterfaces\DependantInterface;
use App\Contracts\RepoInterfaces\FileInterface;
use App\Contracts\RepoInterfaces\OccupantInterface;
use App\Contracts\RepoInterfaces\OptionInterface;
use App\Contracts\RepoInterfaces\RelationInterface;
use App\Contracts\RepoInterfaces\TypeInterface;
use App\Contracts\RepoInterfaces\UserInterface;
use App\Repos\ApartmentRepository;
use App\Repos\BookingRepository;
use App\Repos\ContentRepository;
use App\Repos\DependantRepository;
use App\Repos\FileRepository;
use App\Repos\OccupantRepository;
use App\Repos\OptionRepository;
use App\Repos\RelationRepository;
use App\Repos\TypeRepository;
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
        $this->app->bind(FileInterface::class, FileRepository::class);
        $this->app->bind(OptionInterface::class, OptionRepository::class);
        $this->app->bind(TypeInterface::class, TypeRepository::class);
        $this->app->bind(BookingInterface::class, BookingRepository::class);
        $this->app->bind(OccupantInterface::class, OccupantRepository::class);
        $this->app->bind(DependantInterface::class, DependantRepository::class);
        $this->app->bind(RelationInterface::class, RelationRepository::class);
    }
}
