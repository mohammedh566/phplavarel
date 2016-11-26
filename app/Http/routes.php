<?php
   Route::get('/', 'WelcomeController@index');
   Route::resource('projects', 'ProjectsController');
   Route::resource('tasks', 'TasksController');
   