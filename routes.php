<?php
// Import router class
require 'includes/router.php';

// Declare your routes here
Router::get('/');
Router::get('/cars');
Router::get('/about-us');
Router::get('/blog');
Router::get('/blog/{id}');
Router::get('/contact');
Router::get('/login');

Router::get('/admin');
Router::get('/admin/blogs');
Router::get('/admin/cars');

// If no route exist launch 404
Router::launch404();