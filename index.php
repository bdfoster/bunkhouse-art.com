<?php

include 'lib/flow.php';
include 'config.php';

get('/', function($app) {
	$app->render('home');
});

post('/site-ready-notification', function($app) {
	if ($app->validate_email($app->form('email')) == false) {
		$app->set('error', $app->form('email') . ' is not a valid email address. Please try again.');
		$app->render('home');
		exit;
	}
	$post = new stdClass;
	$app->couch->setDatabase(COUCHDB_DEFAULT_DB . 'newsletters/site-ready-notification');
	$app->couch->login(ADMIN_USER, ADMIN_PASSWORD);
	$post->_id = $app->form('email');
	$post->first_name = $app->form('first_name');
	$post->last_name = $app->form('last_name');
	try {
		$app->couch->post($post);
	} catch (SagCouchException $e) {
		if ($e->getCode() == "409") {
			$app->set('error', $app->form('email') . ' is already set up for this notification.');
			$app->render('home');
			exit;
		}
	}
	if ($app->form('first_name') == '') {
		$app->set('success', 'Thanks ' . $app->form('email') . ', we\'ll let you know when we\'re ready!');
	} else {
		$app->set('success', 'Thanks ' . $app->form('first_name') . ', we\'ll let you know when we\'re ready!');
	}
	$app->render('home');
});
    
get('/login', function($app) {
	if (User::is_authenticated()) {
		$app->set('success', 'You are already logged in!');
		$app->render('home');
		exit;
	}
	$app->render('user/login');
});

post('/login', function($app) {
	$user = new User();
	$user->name = $app->form('username');
	$user->login($app->form('password'));
	
	$app->set('success', 'You are now logged in!');
	$app->render('home');
});

get('/logout', function($app) {
	User::logout();
	$app->set('success', 'You are now logged out!');
	$app->render('home');
});

get('/my-account', function($app) {
	if (User::is_authenticated()) {
		$app->render('my-account');
		exit;
	}
	$app->render('login');
});

get('/say/:message', function($app) {
	$app->set('message', $app->request('message'));
	$app->render('home');
});


// Leave at end of file!
resolve();
