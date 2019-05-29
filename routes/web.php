<?php

Route::get('/', 'Home@index')->name('home');

Route::get('/about', 'About@index')->name('about');

Route::get('/post/{id?}', 'Post@index')->name('post');

Route::get('/contact', 'Contact@index')->name('contact');

Route::post('/post/{post}/comment/', 'CommentController@add')->name('commentToPost');

Auth::routes();