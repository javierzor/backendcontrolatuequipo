<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationEmail as ReservationEmail;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});

//Google Controllers:
Route::post('/google/validate', 'Auth\GoogleController@login')->name('google.login');
Route::post('/google/register', 'Auth\GoogleController@google');
Route::post('/google/update', 'Auth\GoogleController@update');
Route::post('/google/validate2', 'Auth\GoogleController2@login')->name('google.login');
Route::post('/google/register2', 'Auth\GoogleController2@google');
Route::post('/google/update2', 'Auth\GoogleController2@update');
Route::get('registros/referido/{appverification}', function($appverification){
	return "Mostrando el referido $appverification del registro";
});



Route::post('/contactar', 'Verification\GetcodeController@contact');
//Ruta que esta señalando nuestro formulario



//getcode fuction:
Route::get('/vercodigo', 'Verification\GetcodeController@Getcode');
Route::post('/thiscodetothisuser', 'Verification\GetcodeController@Thiscodetothisuser');


//mediciones de usuario
Route::get('/mediciones/todas', 'mediciones\medicionesController@medicionestodo');
Route::get('/mediciones/todasdetalles', 'mediciones\medicionesController@medicionestododetalles');
Route::post('/mediciones/agregarinput', 'mediciones\medicionesController@medicioninsertinputs');
Route::post('/mediciones/agregardrop', 'mediciones\medicionesController@medicioninsertdrop');



Route::post('/user/updateimg', 'Auth\GoogleController@updateuserimg');


//fin mediciones de usuario

//Favorite Functions
Route::post('/favorite/promotion/add', 'Favorite\FavoriteController@promotion');
Route::post('/favorite/local/add', 'Favorite\FavoriteController@local');
Route::post('/favorite/like', 'Favorite\FavoriteController@like');




//Promotions Functions
Route::get('/promotionshow', 'Promotions\PromotionsController@showpromotion');

Route::post('/promotions', 'Promotions\PromotionsController@local');

Route::post('/promotion', 'Promotions\PromotionsController@view');

//ocupations Fuctions:
Route::get('/ocupationshow', 'Ocupations\OcupationsController@showpromotion');
Route::post('/ocupations', 'Ocupations\OcupationsController@local');
Route::post('/ocupation', 'Ocupations\OcupationsController@view');



//Regiter From Refered Options
Route::get('refered=$2y$10$7.e6344mJx9WU8d2fIliiO2hEDHyUc94X7vkuDvrtsGhWa9HpLbu6{id}', 'Refered\ReferedController@index');
Route::post('refered', 'Refered\ReferedController@register')->name('refered');
Route::post('dameeliddeluser', 'Refered\ReferedController@dameeliddeluser')->name('dameeliddeluser');
Route::post('deidanombre', 'Refered\ReferedController@deidanombre');


//Qr Functions by Refered
Route::get('/qr', 'Qr\QrController@create');
Route::post('/qr/refered', 'Qr\QrController@index');
Route::post('/qr/verilevel', 'Qr\QrController@verilevel');




//Register From Movil App
Route::post('/register', 'Auth\RegisterController@register');


// Rutas en desarrollo para el registro

/

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


// rutas del pasaporte para ionic controlatuequipo
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'Auth\AuthController@login')->name('login');
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'Auth\AuthController@logout');
        Route::get('user', 'Auth\AuthController@user');
    });
});


// comandos por ruta
// Run config:clear in Shared Hosting Server
Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    // Do whatever you want either a print a message or exit
});

// config cache
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    // Do whatever you want either a print a message or exit
});

// limpiar cache
Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    // Do whatever you want either print a message or exit
});

// limpiar vistas
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    // Do whatever you want either print a message or exit
});

// crear un controlador
Route::get('/creacontrolador', function() {
    Artisan::call('make:controller varios/variosControllerOFFFFFF');
    // Do whatever you want either print a message or exit
});


//filtro del drop de posiciones de jugadores segun el tipo_cuenta
// Route::post('/filtrodehabilidades', 'Dropsdeinputs\PosicionesController@filtrando_habilidades');

//rutas de habilidades
Route::get('/habilidades/todas', 'habilidades\habilidadesController@medicionestodo');
Route::get('/habilidades/todasdetalles', 'habilidades\habilidadesController@habilidadestododetalles');
Route::post('/habilidades/agregarinput', 'habilidades\habilidadesController@habilidadinsertinputs');
Route::post('/habilidades/agregardrop', 'habilidades\habilidadesController@habilidadinsertdrop');
Route::post('/filtrodehabilidades', 'habilidades\habilidadesController@filtrando_habilidades');

//ruta del actualizador de tipo_cuenta segun el correo de usuario entrante
Route::post('/tipocuentacambio', 'tipocuentacambio\tipocuentacambioController@tipocuentacambio');

//ruta del actualizador de escalon 3 completa registro segun el correo de usuario entrante
Route::post('/perfilcambioescalon2', 'tipocuentacambio\tipocuentacambioController@perfilcambioescalon2');


// se creara ruta de creaequipo en "varios"
// Route::post('/mediciones/agregardrop', 'mediciones\medicionesController@medicioninsertdrop');
Route::post('/creaequipo', 'varios\variosController@creaequipo');
Route::post('/tengoequipo', 'varios\variosController@tengoequipo');
Route::post('/participantesequipo', 'varios\variosController@participantesequipo');
Route::post('/miequipodetalles', 'varios\variosController@miequipodetalles');
Route::post('/cambiarescudo', 'varios\variosController@cambiarescudo');
Route::post('/participantesequipojugadores', 'varios\variosController@participantesequipojugadores');


//edicion de perfil controlatuequipo:
Route::post('/cambiarimagen', 'varios\variosController@cambiarimagen');


// partidos rutas
Route::post('/creapartido', 'varios\variosController@creapartido');
Route::post('/nuestrospartidos', 'varios\variosController@nuestrospartidos');
Route::post('/insertadetallesgoles', 'varios\variosController@insertadetallesgoles');
Route::post('/insertadetallesamarillaes', 'varios\variosController@insertadetallesamarillaes');
Route::post('/insertadetallesrojaes', 'varios\variosController@insertadetallesrojaes');
Route::post('/insertadetallesfaltaes', 'varios\variosController@insertadetallesfaltaes');
Route::post('/detallesdepartidos', 'varios\variosController@detallesdepartidos');

//rutas de fisioterapeuta
Route::post('/insertadetalleslesiones', 'varios\variosController@insertadetalleslesiones');
Route::post('/detalleslesiones', 'varios\variosController@detalleslesiones');
Route::post('/detalleslesionesjugadorporevento', 'varios\variosController@detalleslesionesjugadorporevento');


//rutas de temporadas y sesiones
Route::post('/insertartemporada', 'varios\variosController@insertartemporada');
Route::post('/insertarsesion', 'varios\variosController@insertarsesion');
Route::post('/mostrarsesiones', 'varios\variosController@mostrarsesiones');
Route::post('/insertarsesiondetalles', 'varios\variosController@insertarsesiondetalles');
Route::post('/mostrarsesionesdetalles', 'varios\variosController@mostrarsesionesdetalles');


//rutas de quizzes
Route::post('/isertarquizzes', 'varios\variosController@isertarquizzes');
Route::post('/listadequizzes', 'varios\variosController@listadequizzes');
Route::post('/guardarquizzjugadores', 'varios\variosController@guardarquizzjugadores');
Route::post('/versiyahizoquizzjugadores', 'varios\variosController@versiyahizoquizzjugadores');
Route::post('/quizzesultimasrespuestas', 'varios\variosController@quizzesultimasrespuestas');
Route::post('/quizzesdespuesporsesion', 'varios\variosController@quizzesdespuesporsesion');
Route::post('/insertarwellness', 'varios\variosController@insertarwellness');
Route::post('/cadawellness', 'varios\variosController@cadawellness');
Route::post('/insertarfatigasubjetiva', 'varios\variosController@insertarfatigasubjetiva');
Route::post('/cadafatigasubjetiva', 'varios\variosController@cadafatigasubjetiva');












