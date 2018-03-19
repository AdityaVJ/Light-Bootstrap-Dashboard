<?php

Route::group([
    'namespace'  => 'RenderbitTechnologies\LightBootstrapDashboard\Controllers',
    'prefix' => 'lbd',
], function () {
    // Dashboard
    Route::get('dashboard', 'LightBootstrapDashboardController@getDashboard')->name('lbd.dashboard');

    // Components
    Route::get('buttons', 'LightBootstrapDashboardController@getButtons')->name('lbd.components.buttons');
    Route::get('grid', 'LightBootstrapDashboardController@getGrid')->name('lbd.components.grid');
    Route::get('panels', 'LightBootstrapDashboardController@getPanels')->name('lbd.components.panels');
    Route::get('sweet-alert', 'LightBootstrapDashboardController@getSweetAlert')->name('lbd.components.sweet-alert');
    Route::get('notifications', 'LightBootstrapDashboardController@getNotifications')->name('lbd.components.notifications');
    Route::get('icons', 'LightBootstrapDashboardController@getIcons')->name('lbd.components.icons');
    Route::get('typography', 'LightBootstrapDashboardController@getTypography')->name('lbd.components.typography');
});