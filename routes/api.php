<?php

use Illuminate\Http\Request;

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

// *** Documents *** //
Route::apiResource('documents', 'DocumentController');
Route::get('documents/{document}/relationships/authors', 'DocumentRelationshipController@author')->name('documents.relationships.authors');
Route::get('documents/{document}/author', 'DocumentRelationshipController@author')->name('documents.author');
Route::get('documents/{document}/relationships/comments', 'DocumentRelationshipController@comments')->name('documents.relationships.comments');
Route::get('documents/{document}/comments', 'DocumentRelationshipController@comments')->name('documents.comments');

// *** Users *** //
Route::apiResource('users', 'UserController');
Route::get('users/{user}/relationships/documents', 'UserRelationshipController@author')->name('users.relationships.documents');
Route::get('users/{user}/author', 'UserRelationshipController@author')->name('documents.author');
Route::get('users/{user}/relationships/comments', 'UserRelationshipController@comments')->name('users.relationships.comments');
Route::get('users/{user}/comments', 'UserRelationshipController@comments')->name('documents.comments');

// *** Comments *** //
Route::apiResource('comments', 'CommentController');
Route::get('documents/{document}/relationships/author', 'DocumentRelationshipController@author')->name('documents.relationships.author');
Route::get('documents/{document}/author', 'DocumentRelationshipController@author')->name('documents.author');
Route::get('documents/{document}/relationships/comments', 'DocumentRelationshipController@comments')->name('documents.relationships.comments');
Route::get('documents/{document}/comments', 'DocumentRelationshipController@comments')->name('documents.comments');
