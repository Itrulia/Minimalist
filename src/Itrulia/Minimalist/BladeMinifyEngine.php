<?php namespace Itrulia\Minimalist;

use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Compilers\CompilerInterface;

class BladeMinifyEngine extends CompilerEngine
{
	public function __construct(CompilerInterface $compiler)
	{
		parent::__construct($compiler);
	}

	public function get($path, array $data = array())
	{
		$contents = parent::get($path, $data);
		return \Minify_HTML::minify($contents, array('jsMinifier' => array('JSMin', 'minify')));
	}
}