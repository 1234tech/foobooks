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

/*
 * Home
 */

Route::get('/', 'WelcomeController');

/*
 * Books
 */

# /routes/web.php
Route::get('/books/search', 'BookController@search'); # <-- NEW 1 of 2
Route::get('/books/search-process', 'BookController@searchProcess'); # <-- NEW 2 of 2


Route::get('/books/create', 'BookController@create');
Route::post('/books', 'BookController@store');


Route::get('/books/{title}', 'BookController@show');
Route::get('/books', 'BookController@index');


/*
 * Practice
 */

Route::any('/practice/{n?}', 'PracticeController@index');


Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});






# Example shown at the end of Week 6's lectures
# to discuss the kind of planning work you can do for Project 3
//Route::get('/', 'TriviaController@index');
//Route::get('/check-answer', 'TriviaController@checkAnswer');

# Example with two route parameters
//Route::get('/books/{category}/{title}', function($category, $title) {
//    return 'You are viewing the book: '.$title.' in the category '.$category;
//});

// OLD CODE FROM COURSE VIDEOS - week 6

/*

Route::get('/abc', function() {
    return App::environment();
});

Route::get('/', function () {
    //return 'This is the index...';
    return view('welcome');
    //return view('xyz');
});

Route::get('/books/{category}/{title}', function($category, $title) {
    return 'You are viewing the book: '.$title.' in the category '.$category;
});

Route::get('/books/{title}', function($title = null) {
    return 'You are viewing the book: ' . $title;
});

Route::get('/books', function() {
    return 'Here are all the books...';
});


Route::get('/books/{title?}', function($title = null) {


    if($title == null) {
        return 'You did not specify a title';
    }
    else {
        return 'You are viewing the book: ' . $title;
    }
});




Route::get('/books/{abc}/{xyz}', function($x, $y) {
    return 'You are viewing the book: '.$x.' in the category '.$y;
});




Route::get('/abc', function () {
    return 'This is the abc route...';
    //return view('welcome');
});



Route::get('/example', function () {
    return view('abc');
});

*/
