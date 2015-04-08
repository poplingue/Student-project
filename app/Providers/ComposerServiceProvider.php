<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Student;
use App\Category;
use View;

class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// injection dans sidebar
		View::composer('partials.nav', function($view){
            $view->with('menu', Category::all());
            $view->with('students', Student::all());
        });

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
