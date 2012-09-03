<?php

include 'lib/flow.php';
include 'config.php';

get('/', function($app) {
	$app->render('home');
});

post('/site-ready-notification', function($app) {
	$post = new stdClass;
	$app->couch->setDatabase('site-ready-notification');
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
		$flow->error500($e);
		exit;
	}
	$app->set('success', 'Thanks ' . $app->form('first_name') . ', we\'ll let you know when we\'re ready!');
	$app->render('home');
});
    
get('/signup', function($app) {
	$app->render('signup');
});

post('/signup', function($app) {
	$app->set('message', 'Thanks for signing up ' . $app->form('name') . '!');
	$app->render('home');
});

get('/say/:message', function($app) {
	$app->set('message', $app->request('message'));
	$app->render('home');
});


// Leave at end of file!
resolve();
