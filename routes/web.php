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


Auth::routes();

Route::get('/admin/pages', 'Admin\Pages\ListController@index');
Route::get('/admin/pages/create', 'Admin\Pages\CreateController@index');
Route::post('/admin/pages/create/save', 'Admin\Pages\CreateController@save');

Route::get('/admin/categories', 'Admin\Categories\ListController@index');
Route::get('/admin/categories/create', 'Admin\Categories\CreateController@index');
Route::post('/admin/categories/create/save', 'Admin\Categories\CreateController@save');
Route::get('/admin/categories/update', 'Admin\Categories\UpdateController@index');
Route::post('/admin/categories/update/save', 'Admin\Categories\UpdateController@save');
Route::get('/admin/categories/delete', 'Admin\Categories\DeleteController@delete');

Route::get('/admin/reviews', 'Admin\Reviews\ListController@index');
Route::get('/admin/reviews/create', 'Admin\Reviews\CreateController@index');
Route::post('/admin/reviews/create/save', 'Admin\Reviews\CreateController@save');
Route::get('/admin/reviews/update', 'Admin\Reviews\UpdateController@index');
Route::post('/admin/reviews/update/save', 'Admin\Reviews\UpdateController@save');
Route::get('/admin/reviews/delete', 'Admin\Reviews\DeleteController@delete');

Route::get('/admin/sizes', 'Admin\Sizes\ListController@index');
Route::get('/admin/sizes/create', 'Admin\Sizes\CreateController@index');
Route::post('/admin/sizes/create/save', 'Admin\Sizes\CreateController@save');
Route::get('/admin/sizes/update', 'Admin\Sizes\UpdateController@index');
Route::post('/admin/sizes/update/save', 'Admin\Sizes\UpdateController@save');
Route::get('/admin/sizes/delete', 'Admin\Sizes\DeleteController@delete');

Route::get('/admin/products', 'Admin\Products\ListController@index');
Route::get('/admin/products/create', 'Admin\Products\CreateController@index');
Route::post('/admin/products/create/save', 'Admin\Products\CreateController@save');
Route::get('/admin/products/variant', 'Admin\Products\CreateController@variant');
Route::post('/admin/products/variant/save', 'Admin\Products\CreateController@variantSave');
Route::get('/admin/products/update', 'Admin\Products\UpdateController@index');
Route::post('/admin/products/update/save', 'Admin\Products\UpdateController@save');
Route::get('/admin/products/delete', 'Admin\Products\DeleteController@delete');

Route::get('/admin/variants', 'Admin\Variants\ListController@index');
Route::get('/admin/variants/create', 'Admin\Variants\CreateController@index');
Route::post('/admin/variants/create/save', 'Admin\Variants\CreateController@save');
Route::get('/admin/variants/update', 'Admin\Variants\UpdateController@index');
Route::post('/admin/variants/update/save', 'Admin\Variants\UpdateController@save');


Route::get('/admin/filters', 'Admin\Filters\ListController@index');
Route::get('/admin/filters/create', 'Admin\Filters\CreateController@index');
Route::post('/admin/filters/create/save', 'Admin\Filters\CreateController@save');
Route::get('/admin/filters/update', 'Admin\Filters\UpdateController@index');
Route::post('/admin/filters/update/save', 'Admin\Filters\UpdateController@save');
Route::get('/admin/filters/delete', 'Admin\Filters\DeleteController@delete');

Route::get('/admin/filter/tag/create', 'Admin\FilterTags\CreateController@index');
Route::post('/admin/filter/tag/save', 'Admin\FilterTags\CreateController@save');
Route::get('/admin/filter/tag/update', 'Admin\FilterTags\UpdateController@index');
Route::post('/admin/filter/tag/update/save', 'Admin\FilterTags\UpdateController@save');
Route::get('/admin/filter/tag/delete', 'Admin\FilterTags\DeleteController@delete');

Route::get('/admin/users', 'Admin\Users\ListController@index');
Route::get('/admin/users/create', 'Admin\Users\CreateController@index');

Route::get('/admin/menu', 'Admin\Menu\ListController@index');
Route::get('/admin/menu/create', 'Admin\Menu\CreateController@index');
Route::post('/admin/menu/create/save', 'Admin\Menu\CreateController@save');
Route::get('/admin/menu/update', 'Admin\Menu\UpdateController@index');
Route::post('/admin/menu/update/save', 'Admin\Menu\UpdateController@save');

Route::get('/admin/menu/item/create', 'Admin\MenuItems\CreateController@index');
Route::post('/admin/menu/item/save', 'Admin\MenuItems\CreateController@save');
Route::get('/admin/menu/item/update', 'Admin\MenuItems\UpdateController@index');
Route::post('/admin/menu/item/update/save', 'Admin\MenuItems\UpdateController@save');
Route::get('/admin/menu/item/delete', 'Admin\MenuItems\DeleteController@delete');

Route::get('/admin/attributes', 'Admin\Attributes\ListController@index');
Route::get('/admin/attributes/create', 'Admin\Attributes\CreateController@index');
Route::post('/admin/attributes/create/save', 'Admin\Attributes\CreateController@save');
Route::get('/admin/attributes/update', 'Admin\Attributes\UpdateController@index');
Route::post('/admin/attributes/update/save', 'Admin\Attributes\UpdateController@save');
Route::get('/admin/attributes/delete', 'Admin\Attributes\DeleteController@delete');

Route::get('/admin/attribute/values/create', 'Admin\AttributeValues\CreateController@index');
Route::post('/admin/attribute/values/save', 'Admin\AttributeValues\CreateController@save');
Route::get('/admin/attribute/values/update', 'Admin\AttributeValues\UpdateController@index');
Route::post('/admin/attribute/values/update/save', 'Admin\AttributeValues\UpdateController@save');
Route::get('/admin/attribute/values/delete', 'Admin\AttributeValues\DeleteController@delete');

Route::get('/admin/media', 'Admin\Media\ListController@index');
Route::get('/admin/media/create', 'Admin\Media\CreateController@index');
Route::post('/admin/media/create/save', 'Admin\Media\CreateController@save');
Route::get('/admin/media/update', 'Admin\Media\UpdateController@index');
Route::post('/admin/media/update/save', 'Admin\Media\UpdateController@save');
Route::get('/admin/media/delete', 'Admin\Media\DeleteController@delete');

Route::get('/admin/roles', 'Admin\Roles\ListController@index');
Route::get('/admin/roles/create', 'Admin\Roles\CreateController@index');

Route::get('/admin/campaigns', 'Admin\Campaigns\ListController@index');
Route::get('/admin/campaigns/create', 'Admin\Campaigns\CreateController@index');

Route::get('/admin/inventory', 'Admin\Inventory\ListController@index');
Route::get('/admin/inventory/create', 'Admin\Inventory\CreateController@index');
Route::post('/admin/inventory/create/save', 'Admin\Inventory\CreateController@save');
Route::get('/admin/inventory/update', 'Admin\Inventory\UpdateController@index');
Route::post('/admin/inventory/update/save', 'Admin\Inventory\UpdateController@save');
Route::get('/admin/inventory/delete', 'Admin\Inventory\DeleteController@delete');

Route::get('/admin', 'Admin\Dashboard\DashboardController@index');

Route::any('/{any}', 'PageController@handler')->where("any" , "(.*)");

