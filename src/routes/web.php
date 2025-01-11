<?php
/*
* This file is part of the PostboxCMS\Inspire package.
* (c) PostboxCMS <sanket@digitalbit.in> 
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
use Illuminate\Support\Facades\Route;
use PostboxCMS\Inspire\Http\Controllers\InspireController;

Route::prefix('cms')->group(function () {
    Route::get('/inspire', [InspireController::class, 'index']);
});