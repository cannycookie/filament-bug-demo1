<?php

namespace App\Providers;

use Filament\Tables\Table;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Table::configureUsing(static function (Table $table): void {
            $table
                ->persistFiltersInSession()
                ->persistSortInSession()
                ->deferFilters(false)
                ->paginated([10, 25, 50, 100]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
