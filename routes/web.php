<?php
use App\User;
use Illuminate\Support\Facades\Input;
use App\Listing;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/booksfortrade', 'BooksForTradeController@index');
Route::post("store", 'BooksForTradeController@store');

Route::get('bookswanted', 'BooksWantedController@index');
Route::post('wanted', 'BooksWantedController@wanted');

//Route::get('/booksfortrade', function (){
//    return view('booksfortrade');
//});

Route::get('/selectbook', 'SelectBookController@index');
Route::get('selectbook-ajax', 'SelectBookController@dataAjax');
Route::post("bookneeded", 'SelectBookController@bookneeded');


Route::get('/selectcourse','SelectCourseController@index');
Route::post("look", 'SelectCourseController@look');

Route::get ( 'searchbooks', function () {
    $dummyDetails = Listing::paginate(15);
    return view ( 'searchbooks' )->withListings($dummyDetails);
} );
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
        $listing = Listing::where ( 'isbn', 'LIKE', '%' . $q . '%' )->orWhere ( 'title', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
        $pagination = $listing->appends ( array (
            'q' => Input::get ( 'q' )
        ) );
        if (count ( $listing ) > 0)
            return view ( 'searchbooks' )->withDetails ( $listing )->withQuery ( $q );
    }
    return view ( 'searchbooks' )->withMessage ( 'No Details found. Try to search again !' );
} );

//Route::get('/searchbooks', function(){
//    return view('searchbooks');
//});


//tutorial from laracasts (not working)
//Route::get('searchbooks', function ()
//{
//    $query = Request::get('q');
//
//    if($query)
//    {
//        $listings = \App\Listing::where('isbn', 'LIKE', "%$query%")->get();
//    }
//    else
//    {
//        $listings = \App\Listing::all();
//    }
//    return view('searchbooks')->withListings($listings);
//});



//Route::get('listings', 'ListingsController@index');

//Route::get('listings', function()
//{
//    $query = Request::get('q');
//    $listings = $query
//    {
//        ? Listing::where('isbn', 'LIKE', "%$query%")->get()
//        : Listing::all();
//    }
//
//    return view::make('listings.index')->withListings(Listing::all());
//});

//Route::get('listings', function(){
//    return view('listings');
//});


//Route::get ( 'test', function () {
//    $dummyDetails = Listing::paginate(15);
//    return view ( 'test' )->withListings($dummyDetails);
//} );
//Route::any ( '/search', function () {
//    $q = Input::get ( 'q' );
//    if($q != ""){
//        $listing = Listing::where ( 'isbn', 'LIKE', '%' . $q . '%' )->orWhere ( 'title', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
//        $pagination = $listing->appends ( array (
//            'q' => Input::get ( 'q' )
//        ) );
//        if (count ( $listing ) > 0)
//            return view ( 'test' )->withDetails ( $listing )->withQuery ( $q );
//    }
//    return view ( 'test' )->withMessage ( 'No Details found. Try to search again !' );
//} );