<?php

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



Route::group(['middleware'=>'web'], function(){

	Route::match(['get', 'post'], '/', ['uses'=>'MainController@execute', 'as'=>'Home']);
	   
	Route::get('/tutorials/html', ['uses'=>'AllTutorialController@HtmlShow', 'as'=>'html']);

	Route::get('/tutorials/html/{id}', ['uses'=>'AllTutorialController@HtmlIdShow', 'as'=>'HtmlId']);

	Route::get('/tutorials/js', ['uses'=>'AllTutorialController@JsShow', 'as'=>'js']);

	Route::get('/tutorilas/js/{id}', ['uses'=>'AllTutorialController@JsIdShow', 'as'=>'jsId']);

	Route::get('/tutorials/php', ['uses'=>'AllTutorialController@PhpShow', 'as'=>'php']);

	Route::get('/tutorials/php/{id}', ['uses'=>'AllTutorialController@PhpIdShow', 'as'=>'phpId']);

	Route::get('/tutorials/mysql', ['uses'=>'AllTutorialController@MysqlShow', 'as'=>'mysql']);

	Route::get('/tutorials/mysql{id}', ['uses'=>'AllTutorialController@MysqlIdShow', 'as'=>'mysqlId']);

	Route::get('/tutorials/css', ['uses'=>'AllTutorialController@CssShow', 'as'=>'css']);

	Route::get('/tutorials/css/{id}', ['uses'=>'AllTutorialController@CssIdShow', 'as'=>'CssId']);

	Route::get('/tutorials', ['uses'=>'TutorialController@execute', 'as'=>'tutorial']);

	Route::get('/team', ['uses'=>'teamController@execute', 'as'=>'team']);

	Route::get('/video', ['uses'=>'VideoController@execute', 'as'=>'video']);

	Route::get('/fullVideo/{id}', [ 'middleware'=>['auth'], 'uses'=>'VideoController@Vexecute', 'as'=>'fullVideo']);

	Route::get('getVideo/{id}', [ 'middleware'=>['auth'], 'uses'=>'VideoController@getVideo', 'as'=>'getVideo']);

	
	
});

//admin/page/editPanel

	Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'App\Http\Middleware\AdminMiddleware']], function(){

	Route::get('/', function(){

		if(view()->exists('admin.index')){
			$data=[
				'title'=>'Admin Panel'
			];
			return view('admin.index', $data);
		}
	});

	//admin.pages
	Route::group(['prefix'=>'tutorial'], function(){

		Route::get('/', ['uses'=>'TutorialAdminController@execute', 'as'=>'tutorials']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add',['uses'=>'TutorialAdminController@Addexecute', 'as'=>'tutorialadd']);
		//admin/edit
		Route::match(['get', 'post', 'delete'], '/edit/{id}',['uses'=>'TutorialAdminController@Editexecute', 'as'=>'tutorialedit']);

	});




	//ADMIN/PAGE
	Route::group(['prefix'=>'videos'], function(){

		Route::get('/', ['uses'=>'VideoAdminController@execute', 'as'=>'videos']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add',['uses'=>'VideoAdminController@Addexecute', 'as'=>'videoadd']);
		//admin/edit
		Route::match(['get', 'post', 'delete'], '/edit/{id}',['uses'=>'VideoAdminController@Editexecute', 'as'=>'videoedit']);

	});



	Route::group(['prefix'=>'team'], function(){

		Route::get('/', ['uses'=>'TeamAdminController@execute', 'as'=>'teams']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add',['uses'=>'TeamAdminController@Addexecute', 'as'=>'teamadd']);
		//admin/edit
		Route::match(['get', 'post', 'delete'], '/edit/{video}',['uses'=>'TeamAdminController@Editexecute', 'as'=>'teamedit']);


});

	Route::group(['prefix'=>'AllTutorials'], function(){

		Route::get('/', ['uses'=>'AllTutorialsController@execute', 'as'=>'AllTutorials']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add',['uses'=>'AllTutorialscontroller@Addexecute', 'as'=>'AllTutorialsAdd']);
		//admin/edit
		Route::match(['get', 'post', 'delete'], '/edit/{id}',['uses'=>'AllTutorialscontroller@Editexecute', 'as'=>'AllTutorialsEdit']);

	});
		

});





Auth::routes(['verify'=> true]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::get('/dashboard/add-to-cart{video}', 'CardController@add')->name('cart.add')->middleware('auth');
Route::get('/dashboard/cart', 'CardController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{videoId}', 'CardController@destroy')->name('cart.destroy');













