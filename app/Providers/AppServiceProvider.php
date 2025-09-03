<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Type::hasType('enum') === false) {
            Type::addType('enum', \Doctrine\DBAL\Types\StringType::class);
        }

        /** @var \Doctrine\DBAL\Connection $connection */
        $connection = DB::connection()->getDoctrineConnection();
        $platform = $connection->getDatabasePlatform();

        if (! $platform->hasDoctrineTypeMappingFor('enum')) {
            $platform->registerDoctrineTypeMapping('enum', 'string');
        }
    }
}
