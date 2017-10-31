<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comment', 'CommentsController@store');
Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/', function () {
    $names = ['Mustafa', 'Kamel', 'El-Sayed'];
    return view('hello')->with('names', $names);
});


/*
Route::get('/', function () {
    $names = ['Mustafa', 'Kamel', 'El-Sayed'];
    return view('hello', compact('names'));
});

Route::get('/tasks', function(){
    // $tasks = DB::table('tasks')->latest()->get();
    // $tasks = Task::all();
    $tasks = Task::incomplete()->get();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id){
    // $task = DB::table('tasks')->find($id);
    $task = Task::find($id);
    return view('tasks.show', compact('task'));
});*/