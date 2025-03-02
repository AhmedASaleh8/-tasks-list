<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    $name = 'Ahmed';
    $departments = [ 
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
     ]; 
      
    // ثلاث طرق لإرسال البيانات من controller إلى view
    // return view('about')->with('name', $name); على طريقة with
    // return view('about', data: ['name'=> $name]); هذه الطريقة التانية 
    return view('about', data: compact('name' , 'departments')); // هذه الطريقة الثالثة
}); 
Route::post('/about', function () {
    $name = $_POST['name'];
    $departments = [ 
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
     ]; 

    return view('about', compact('name'));
});
