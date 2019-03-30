<?php

Route::get('/games', 'PagesController@games');
Route::get('/teams', 'PagesController@teams');
Route::get('/mini-league', 'PagesController@mini_league');
Route::get('/help', 'PagesController@help');

Route::get('/admin/home', function(){
    return view('home');
})->middleware('auth','admin');
Route::get('/user',function(){
    return view('user/home');
})->middleware('auth');
Route::get('/', 'HomeController@index');
Route::post('login/custom', 'LoginController@login')->name('login.custom');
Route::get('login/custom', 'HomeController@index')->name('login.custom.red');
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/admin/home', 'DashboardController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('teams', 'Admin\TeamsController');
    Route::post('teams_mass_destroy', ['uses' => 'Admin\TeamsController@massDestroy', 'as' => 'teams.mass_destroy']);
    Route::post('teams_restore/{id}', ['uses' => 'Admin\TeamsController@restore', 'as' => 'teams.restore']);
    Route::delete('teams_perma_del/{id}', ['uses' => 'Admin\TeamsController@perma_del', 'as' => 'teams.perma_del']);
    Route::resource('players', 'Admin\PlayersController');
    Route::post('players_mass_destroy', ['uses' => 'Admin\PlayersController@massDestroy', 'as' => 'players.mass_destroy']);
    Route::post('players_restore/{id}', ['uses' => 'Admin\PlayersController@restore', 'as' => 'players.restore']);
    Route::delete('players_perma_del/{id}', ['uses' => 'Admin\PlayersController@perma_del', 'as' => 'players.perma_del']);
    Route::resource('games', 'Admin\GamesController');
    Route::post('games_mass_destroy', ['uses' => 'Admin\GamesController@massDestroy', 'as' => 'games.mass_destroy']);
    Route::post('games_restore/{id}', ['uses' => 'Admin\GamesController@restore', 'as' => 'games.restore']);
    Route::delete('games_perma_del/{id}', ['uses' => 'Admin\GamesController@perma_del', 'as' => 'games.perma_del']);



 
});

Auth::routes();

