<?php
namespace juju\qqwry;

use Illuminate\Support\ServiceProvider;

class qqwryserviceprovider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('qqwry', function ($app) {
			$file = realpath(__DIR__ . '/../../../database/qqwry.dat');
			return new Laravel_ip2location($file);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'qqwry'
		];
	}
}
