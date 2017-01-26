<?php

function home_action()
{
    // $user = getUserById($_SESSION['user_id']);
    // $username = $user['username'];
    $username = 'AtmøsFear';
	require('views/home.html');
}

function about_action()
{
	require('views/about.html');
}

function contact_action()
{
	require('views/contact.html');
}