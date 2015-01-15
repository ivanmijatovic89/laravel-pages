<?php namespace Mijat\Page;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as View;

class PageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('mijat/page');

		include __DIR__.'/../../routes.php';
		\View::addNamespace('package', __DIR__.'/../../views');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['page'] = $this->app->share(function($app)
		{
			return new Page;
		});

		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Page', 'Mijat\Page\Facades\Page');
		});

		\ClassLoader::addDirectories(array(

			__DIR__.'/../../controllers',
//			__DIR__.'/../../views',

		));


	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('page');
	}

}
