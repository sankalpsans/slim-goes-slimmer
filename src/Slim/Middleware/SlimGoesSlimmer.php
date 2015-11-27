<?php
namespace Slim\Middleware;
class SlimGoesSlimmer extends \Slim\Middleware
{
	public function call()
	{
		$app  = $this->app;
		$this->next->call();
		$res  = $app->response();
		$body = $res->body();
		$lessHTML = preg_replace("/\n(\s)*/", "\n", $body);
		$res->body($lessHTML);
	}
}
?>
