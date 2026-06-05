<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});


Route::get('/hello', function () {
    return "
    <html?>
<body>
<span?></span
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
<h1>Welcome</h1>
</body>
    </html>
    ";
});







// hehejksbdbs bewobdhw

// slug->Apple Mobile      apple-mobile
Route::get('product/{id}', function ($id) {
    return $id;
});


// Route::get('user/{name}', function ($name) {
//     return $name;
// });



Route::get('student/{name}', function ($name) {
    return "Hello dear student: $name";
});

Route::get('student/{name}/{age}/{class}', function ($name, $age, $class) {
    return "Hello $name, Your age is: $age. Your read in class: $class";
});


Route::get('addition/{a}/{b}', function ($a, $b) {
    return "Addition is: " . $a + $b;
});

Route::get('user/{age}', function ($age) {
    if ($age >= 18) {
        return "Adult";
    }
    return "Young";
});

// MVC->


Route::get('/admin/', function () {
    return view('welcome');
});
// Route::get('/haha',function())



Route::get('/user', [UserController::class, 'index']);
