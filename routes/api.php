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
Route::get('users/{user}/relationships/documents', 'UserRelationshipController@documents')->name('users.relationships.documents');
Route::get('users/{user}/documents', 'UserRelationshipController@documents')->name('users.documents');
Route::get('users/{user}/relationships/comments', 'UserRelationshipController@comments')->name('users.relationships.comments');
Route::get('users/{user}/comments', 'UserRelationshipController@comments')->name('users.comments');

// *** Comments *** //
Route::apiResource('comments', 'CommentController');
Route::get('comments/{comment}/relationships/users', 'CommentRelationshipController@author')->name('comments.relationships.users');
Route::get('comments/{comment}/users', 'CommentRelationshipController@author')->name('comments.users');
Route::get('comments/{comment}/relationships/documents', 'CommentRelationshipController@comments')->name('comments.relationships.documents');
Route::get('comments/{comment}/documents', 'CommentRelationshipController@comments')->name('comments.documents');
