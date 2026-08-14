<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    $contacts = DB::table('contacts')->first();
    $totaladmission=DB::table('admissions')->count();
     $departments=DB::table('department')->count();
     $course=DB::table('courses')->count();
      $faculties=DB::table('faculties')->count();
    

    View::share('contacts', $contacts);
    View::share('totaladmission', $totaladmission);
    View::share('departments', $departments);
     View::share('course', $course);
       View::share('faculties', $faculties);
    }
}
