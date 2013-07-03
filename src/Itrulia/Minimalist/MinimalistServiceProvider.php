<?php namespace Itrulia\Minimalist;

use Illuminate\Support\ServiceProvider;

class MinimalistServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		list($app, $view) = array($this->app, $this->app['view']);

		$view->addExtension('blade.min.php', 'blade-min', function() use ($app, $view) {
			$resolver = $view->getEngineResolver();
			$compiler = $resolver->resolve('blade')->getCompiler();
			return new BladeMinifyEngine($compiler);
		});

	}

}