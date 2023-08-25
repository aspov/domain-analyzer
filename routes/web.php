<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


$router->get('/', ['as' => 'page.main', function () {
    return view('page.main', ['error' => '']);
}]);

$router->get('/domains',  [DomainController::class, 'index'])->name('domains.index');

$router->post('/domains', [DomainController::class, 'store'])->name('domains.store');

$router->get('/domains/{id}',[DomainController::class, 'show'])->name('domains.show');
