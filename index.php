<?php

include 'lib/flow.php';

get('/', function($app) {
	$app->render('home');
});

post('/site-ready-notification', function($app) {
	$app->set('success', $app->form('first_name') . ', we\'ll notify you as soon as we open up!');
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
