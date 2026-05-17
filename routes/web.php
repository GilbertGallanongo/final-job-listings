<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobLists;

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){ 
    return view('about'); 
});
Route::get('/contact', function(){ 
    return view('contact');
});

Route::get('/job_list', function () {
    return view('job_list', ['job_list' => JobLists::all()]);
});

Route::get('/job_list/{id}', function ($id) {
    $job = JobLists::find($id);

    if (! $job) {
        abort(404);
    }

    return view('jobpage', ['job' => $job]); 
})->whereNumber('id');
