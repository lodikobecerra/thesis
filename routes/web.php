<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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

Route::get('/', [App\Http\Controllers\RoutesController::class, 'login']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('dashboardClient');

Route::middleware('auth')->group(function() {

    //admin
    Route::post('/addProject', [App\Http\Controllers\ProjectController::class, 'addProject'])->name("add_project");
    Route::get('send', [App\Http\Controllers\ProjectController::class, 'addProject']);
    Route::get('/ongoing_projects', [App\Http\Controllers\ProjectController::class, 'displayOngoing'])->name("ongoing_projects");
    Route::get('/outgoing_projects', [App\Http\Controllers\ProjectController::class, 'displayOutgoing'])->name("outgoing_projects");
    Route::get('/archive_projects', [App\Http\Controllers\ProjectController::class, 'archive_projects'])->name("archive_projects");


    Route::get('/equipments', [App\Http\Controllers\EquipmentController::class, 'displayTrucks']);
    Route::post('/addEquipment', [App\Http\Controllers\EquipmentController::class, 'addEquipment']);
    Route::get('/trucks', [App\Http\Controllers\EquipmentController::class, 'displayTrucks']);
    Route::get('/backhoeLoaders', [App\Http\Controllers\EquipmentController::class, 'displayBackhoe']);
    Route::get('/payLoaders', [App\Http\Controllers\EquipmentController::class, 'displayPayLoader']);
    Route::get('/bulldozers', [App\Http\Controllers\EquipmentController::class, 'displayBulldozer']);
    Route::get('/cementMixers', [App\Http\Controllers\EquipmentController::class, 'displayCementMixer']);
    Route::get('/elfs', [App\Http\Controllers\EquipmentController::class, 'displayElf']);
    Route::get('/motorPools', [App\Http\Controllers\EquipmentController::class, 'displayMotorPool']);
    Route::get('/batchings', [App\Http\Controllers\EquipmentController::class, 'displayBatching']);
    Route::get('/asphalts', [App\Http\Controllers\EquipmentController::class, 'displayAsphalt']);


    Route::get('/team', [App\Http\Controllers\RoutesController::class, 'team']);
    Route::get('/add_workforce', [App\Http\Controllers\TeamController::class, 'add_workforce']);
    Route::get('/employeeList', [App\Http\Controllers\TeamController::class, 'employeeList']);
    Route::post('/addWorkforce', [App\Http\Controllers\TeamController::class, 'addWorkforce']);


    Route::get('/calendar', [App\Http\Controllers\RoutesController::class, 'calendar']);


    Route::get('/fileManager', [App\Http\Controllers\RoutesController::class, 'filemanager']);


    Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'viewImage'])->name("gallery");
    Route::get('/upload', [App\Http\Controllers\GalleryController::class, 'upload']);
    Route::post('/uploadImage' , [App\Http\Controllers\GalleryController::class, 'uploadImage']);

    

    //users
    Route::get('/myOngoing',[App\Http\Controllers\ProjectController::class, 'myOngoing'])->name("my_ongoing");
    Route::get('/clientsNewProject/{notification_id}/{project_id}', [App\Http\Controllers\ProjectController::class, 'clientsNewProject'])->name("clients_new_project");
    Route::get('/manageProjects', [App\Http\Controllers\ProjectController::class, 'manageProjects'])->name("manage_projects");
    Route::get('/myEquipment',[App\Http\Controllers\EquipmentController::class, 'myEquipment'])->name("my_equipment");
    Route::get('/myTeam',[App\Http\Controllers\TeamController::class, 'myTeam'])->name("my_team");


    // Route::get('/resetPassword', [App\Http\Controllers\RoutesController::class, 'reset']);

    Route::get('/profile', [App\Http\Controllers\RoutesController::class, 'profile'])->name("profile");

    Route::get('/logout', [App\Http\Controllers\RoutesController::class, 'logout'])->name("logout");
});

// Route::get('/dashboard', [App\Http\Controllers\RoutesController::class, 'dashboard']);

// Route::get('/register', [App\Http\Controllers\RoutesController::class, 'register'])->name("register");
Route::get('/adminConfirmation', [App\Http\Controllers\AdminConfirmationController::class, 'adminConfirmation'])->name("adminConfirmation");
Route::post('/admin_confirmed', [\App\Http\Controllers\AdminConfirmationController::class, 'adminConfirm'])->name("admin_confirmed");

Route::get('/markAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
});

Auth::Routes();