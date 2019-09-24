<?php


return [
    'debug'  => true,
    'routes' => [
        [
            'pattern' => 'home/(:any)',
            'action'  => function () {
                return go('home');
            }
		],
		[
			'pattern' => 'logout',
			'action'  => function() {
				if ($user = kirby()->user()) {
				  $user->logout();
			}
				return go('login');
			  }
		],
    ],
    'kerli81.securedpages.logintype' => 'custom',
    'kerli81.securedpages.custom.page' => 'login'
];