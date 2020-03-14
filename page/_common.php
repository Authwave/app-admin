<?php
namespace Authwave\Page;

use Authwave\Authenticator;
use Gt\WebEngine\Logic\Page;

class _CommonPage extends Page {
	public Authenticator $auth;

	public function go():void {
		if(!$this->auth->isLoggedIn()) {
			$this->auth->login();
		}
	}
}