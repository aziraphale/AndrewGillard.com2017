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

//Route::get('/', 'BlogController@index');
Route::get('/', 'AboutController@index');
Route::get('/about', 'AboutController@index');
Route::get('/cv', 'CvController@index');
Route::get('/portfolio', 'PortfolioController@index');
Route::get('/blog/rss', 'BlogController@rss');

Route::get('/discworld', 'DiscworldController@index');
Route::get('/discworld/cre-cards', 'DiscworldController@crecards');
Route::get('/discworld/deaths', 'DiscworldController@deaths');
Route::get('/discworld/gruntha-deaths', 'DiscworldController@grunthadeaths');
Route::get('/discworld/information', 'DiscworldController@info');
Route::get('/discworld/language-graphs', 'DiscworldController@langgraphs');
Route::post('/discworld/language-graphs', 'DiscworldController@langgraphs');
Route::get('/discworld/render-language-graph', 'DiscworldController@renderlanggraph');
Route::get('/discworld/locations', 'DiscworldController@locations');
Route::get('/discworld/logs', 'DiscworldController@logs');
Route::get('/discworld/maps/{map?}', 'DiscworldController@maps');
Route::get('/discworld/rods', 'DiscworldController@rods');
Route::get('/discworld/status-bar-script', 'DiscworldController@sbscript');

//Route::get('/gallery', 'GalleryController@index');
Route::get('/web2messenger', 'Web2messengerController@index');

/*
        "home": {
            "label": "Blog",
        "about": {
            "label": "About Me",
        "cv": {
            "label": "CV",
        "portfolio": {
            "label": "Portfolio",
        "discworld": {
            "label": "Discworld MUD",
                "crecards": {
                    "label": "Creator Cards",
                "deaths": {
                    "label": "My Deaths",
                "grunthadeaths": {
                    "label": "Gruntha's Deaths",
                "info": {
                    "label": "Information",
                "langgraphs": {
                    "label": "Language Graphs",
                "locations": {
                    "label": "Passage Locations",
                "logs": {
                    "label": "Logs",
                "maps": {
                    "label": "Maps",
                "rods": {
                    "label": "Faith Rods",
                "sbscript": {
                    "label": "Status Bar Script",
        "gallery": {
            "label": "Photo Gallery",
        "w2m": {
            "label": "Web2Messenger",
*/
