<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\DataUpload;

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

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Standard Views
|--------------------------------------------------------------------------
|
| Standard Views include the landing page, user dashboard, and the RStudio and Jupyter IDEs.
*/

Route::get('/', function () {
    return view('landing');
});

# User Dashboard
Route::get('userdashboard', function () {
    return view('user_dashboard');
})->middleware(['auth'])->name('user_dashboard');

# RStudio IDE
Route::get('/rstudio', function() {
//    $path = Request::root() . ':' . env('RSTUDIO_IDE_PORT');
    $path = 'https://google.com';
    return url($path);
})->name('rstudio');

/*
|--------------------------------------------------------------------------
| Controller Routes
|--------------------------------------------------------------------------
|
| These routes provide functionality to things like initiating a new user
| and uploading data.
*/
## Controllers
Route::get("/test-controller-route", [DataUpload::class, 'upload']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Previous Routes
|--------------------------------------------------------------------------
|
| Below are the routes are from legacy versions of EASL.
*/

Route::get('/projects', function () {
    return view('project-dashboard');
})->middleware(['auth'])->name('project-dashboard');

Route::get('/database', function () {
    return view('sample-dashboard');
})->middleware(['auth'])->name('sample-dashboard');

Route::redirect('orthanc', Request::root() . ":" . env('ORTHANC_HTTP_PORT'));

Route::redirect('viewer', Request::root() . ":" . env('VIEWER_HTTP_PORT'));

Route::get("/models", function () {
    return view('dashboard-model');
})->middleware(['auth'])->name('dashboard-model');

Route::get("/design", function () {
    return view('dashboard-design');
})->middleware(['auth'])->name('dashboard-design');

//Route::redirect('jupyter-tf-gpu', env('APP_URL') . ':' . env('JUPYTER_TF_GPU_HTTP_PORT') . '?token=b2f9b9d052a2a074e5fc414ea7327b23460a1bdf907d8472');
Route::redirect('/notebook', Request::root() . ':' . env('JUPYTER_TF_GPU_HTTP_PORT') . '/?token=' . env('JUPYTER_TOKEN') . '/notebook/')->middleware(['auth'])->name('/notebook');

Route::redirect("/orthanc-entry", Request::root() . ':' . env('ORTHANC_HTTP_PORT'))->middleware(['auth'])->name('/orthanc-entry');

//Route::redirect('/rstudio', env('APP_URL') . ':' . env('RSTUDIO_IDE_PORT'))->middleware(['auth'])->name('/rstudio');

Route::redirect('/shiny-test-app', Request::root() . ':' . '3838/test-app')->middleware(['auth'])->name('/shiny-test-app');

Route::redirect('/bvis', Request::root() . ':' . '3838/bvis')->middleware(['auth'])->name('/bvis');

//Route::redirect('/lab', Request::root() . ':8888/?=' . env('password') . '/lab')->middleware(['auth'])->name('/lab');
Route::redirect('/lab', Request::root() . ':8888/lab')->middleware(['auth'])->name('/lab');
//Route::get("/shiny-test-app", function() {
//    return redirect(env('APP_URL') . ':' . '3838/test-app');
//})->middleware(['auth'])->name('/shiny-test-app');

Route::get("/bpmn", function () {
    return view('bpmn-beta');
})->middleware(['auth'])->name('bpmn-beta');

Route::get("/user-study", function () {
    return view('user-study-beta');
})->middleware(['auth'])->name('user-study-beta');


// Emails
Route::get('/send/email', [\App\Http\Controllers\OrderShipment::class, 'mail']);



