<?php

declare(strict_types=1);

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class)->name('welcome');
Route::get('/games', GameController::class)->name('games');
Route::get('/about-us', AboutController::class)->name('about');
Route::get('/teams', TeamController::class)->name('teams');
Route::get('/news', BlogController::class)->name('blog');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function (): void {
    Route::get('/', HomeController::class)->name('home');
    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Setting
    Route::delete('settings/destroy', [SettingController::class, 'massDestroy'])->name('settings.massDestroy');
    Route::resource('settings', SettingController::class)->except(['show']);

    // Team
    Route::delete('teams/destroy', [App\Http\Controllers\Admin\TeamController::class, 'massDestroy'])->name('teams.massDestroy');
    Route::post('teams/media', [App\Http\Controllers\Admin\TeamController::class, 'storeMedia'])->name('teams.storeMedia');
    Route::post('teams/ckmedia', [App\Http\Controllers\Admin\TeamController::class, 'storeCKEditorImages'])->name('teams.storeCKEditorImages');
    Route::resource('teams', App\Http\Controllers\Admin\TeamController::class)->except(['show']);

    // Blog
    Route::delete('blogs/destroy', [App\Http\Controllers\Admin\BlogController::class, 'massDestroy'])->name('blogs.massDestroy');
    Route::post('blogs/media', [App\Http\Controllers\Admin\BlogController::class, 'storeMedia'])->name('blogs.storeMedia');
    Route::post('blogs/ckmedia', [App\Http\Controllers\Admin\BlogController::class, 'storeCKEditorImages'])->name('blogs.storeCKEditorImages');
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class)->except(['show']);

    // Event
    Route::delete('events/destroy', [EventController::class, 'massDestroy'])->name('events.massDestroy');
    Route::post('events/media', [EventController::class, 'storeMedia'])->name('events.storeMedia');
    Route::post('events/ckmedia', [EventController::class, 'storeCKEditorImages'])->name('events.storeCKEditorImages');
    Route::resource('events', EventController::class)->except(['show']);

    // Partner
    Route::delete('partners/destroy', [PartnerController::class, 'massDestroy'])->name('partners.massDestroy');
    Route::post('partners/media', [PartnerController::class, 'storeMedia'])->name('partners.storeMedia');
    Route::resource('partners', PartnerController::class);

    // Subscribe
    Route::delete('subscribes/destroy', [SubscribeController::class, 'massDestroy'])->name('subscribes.massDestroy');
    Route::resource('subscribes', SubscribeController::class);

    // Game
    Route::delete('games/destroy', [App\Http\Controllers\Admin\GameController::class, 'GameController@massDestroy'])->name('games.massDestroy');
    Route::resource('games', App\Http\Controllers\Admin\GameController::class);
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function (): void {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
        Route::post('profile', [ChangePasswordController::class, 'updateProfile'])->name('password.updateProfile');
        Route::post('profile/destroy', [ChangePasswordController::class, 'destroy'])->name('password.destroyProfile');
    }
});

require __DIR__.'/auth.php';
