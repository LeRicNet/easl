<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\DataUpload;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\DicomController;
use App\Http\Controllers\DicomInfoAjaxController;
use App\Http\Controllers\OrderRequestsController;
use App\Http\Controllers\FlaskController;
# Flask API
use App\Http\Controllers\Flask\BarchartController;
use App\Http\Controllers\Flask\RadarchartController;
use App\Http\Controllers\Flask\ScatterplotController;
use App\Http\Controllers\Flask\BoxplotController;
use App\Http\Controllers\Flask\GptController;

use App\Http\Controllers\Dicom\PatientViewController;

use App\Http\Controllers\PatientImageTableController;
use App\Http\Controllers\ComparisonPatient;

use App\Http\Controllers\EyeTracking;

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

//Route::get('/', function () {
//    return view('landing');
//});

# User Dashboard
Route::get('userdashboard', function () {
    return view('user_dashboard');
})->middleware(['auth'])->name('userdashboard');

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

Route::redirect('/flask', rtrim(Request::root(), "/") . ":5000/abc/cde");

Route::get('/ohif-viewer', function () {
    return view('ohif-viewer-frame');
})->middleware(['auth'])->name('ohif-viewer');

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

//Route::redirect('/bvis', Request::root() . ':' . '3838/bvis')->middleware(['auth'])->name('/bvis');
Route::redirect('/bvis', Request::root() . ':' . '3838/bvis');

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

// Monitoring
Route::redirect('/analytics', Request::root() . ':' . '8081')->name('analytics');
Route::redirect('/GeneJockey', Request::root() . ':' . '3838/GeneJockey')->middleware(['auth'])->name('GeneJockey');


// SID2301
Route::get('/sid2301', function() {
    return view('sid2301.index');
});

// ATPC DB; Test for DICOM handling
Route::get("/atpc", function() {
    return view('atpcdb');
})->name('atpc');
//Route::get('/dcm.show', [DicomController::class, 'show'])->name('dcm.show');
Route::resource('ajaxdicominfo', DicomInfoAjaxController::class);

// Design B
Route::get("/design-b", function() {
    return view('sid2301.design-b');
})->middleware(['auth'])->name('design-b');

// Design C
Route::get("/design-c", function() {
    return view('sid2301.design-c-v2');
})->middleware(['auth'])->name('design-c');

// Design D (GPT)
Route::get("/design-d", function() {
    return view('sid2301.design-d-v2');
})->middleware(['auth'])->name('design-d');

// Demo EHR A
Route::get("/demo-ehr", function() {
    return view('sid2301.demoehr');
})->middleware(['auth'])->name('demo-ehr');

// SID2302
Route::get('/sid2302', function() {
    return view('sid2302.interface');
});

Route::get('/sid2302/barco-left', function() {
    return view('sid2302.barco-left');
});

Route::get('/sid2302/barco-right', function() {
    return view('sid2302.barco-right');
});

Route::get('/sid2302/ehr', function() {
    return view('sid2302.ehr');
});

Route::get('/sid2401', function() {
    return view('sid2401.index');
});

Route::redirect("/flask", Request::root() . ':' . ':5000/predict_diagnosis_radar/c921488f-cd651a4e-88483aaa-01683063-6338d780');

Route::resource('order-request-data', OrderRequestsController::class);

Route::resources([
    "dicoms" => DicomInfoAjaxController::class,
    "patientview" => PatientViewController::class,
    "flask" =>  FlaskController::class,
    "flask/barchart" => BarchartController::class,
    "flask/radarchart" => RadarchartController::class,
    "flask/scatterplot" => ScatterplotController::class,
    "flask/boxplot" => BoxplotController::class,
    "flask/gpt" => GptController::class,
]);

Route::resource('comparison-patient', ComparisonPatient::class);
Route::get('comparison/{id}', [ComparisonPatient::class, 'update_comparison_patient']);

Route::get('dicoms/show_series/{patient_name}', [DicomInfoAjaxController::class, 'show_series']);

Route::resource('patient-image-table', PatientImageTableController::class);

Route::redirect('viewer', Request::root() . ":" . env('VIEWER_HTTP_PORT'));

Route::resource('/eyetracking', EyeTracking::class);