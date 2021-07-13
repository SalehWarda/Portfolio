<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProfileSettingsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');


    ################################## Begin profileSettings Route #######################################

    Route::group(['prefix' => 'profileSettings'], function () {

        Route::get('/', [ProfileSettingsController::class, 'profileSettings'])->name('admin.profileSettings');

        Route::get('/account', [ProfileSettingsController::class, 'editAccount'])->name('edit.account');
        Route::put('/account/{id}', [ProfileSettingsController::class, 'updateAccount'])->name('update.account');

        Route::get('/password', [ProfileSettingsController::class, 'changePassword'])->name('change.password');
        Route::put('/password/{id}', [ProfileSettingsController::class, 'updatePassword'])->name('update.password');

    });

    ################################## End profileSettings Route #######################################


    ################################## Begin Home & About Route #######################################

    Route::get('/home', [DashboardController::class, 'home'])->name('admin.home');
    Route::post('/home/update/{id}', [DashboardController::class, 'updateHome'])->name('admin.home.update');

    Route::get('/about', [DashboardController::class, 'about'])->name('admin.about');
    Route::post('/about/update/{id}', [DashboardController::class, 'updateAbout'])->name('admin.about.update');

    Route::get('/facts', [DashboardController::class, 'facts'])->name('admin.facts');
    Route::post('/facts/update/{id}', [DashboardController::class, 'updateFacts'])->name('admin.facts.update');

    Route::get('/skills', [DashboardController::class, 'skills'])->name('admin.skills');
    Route::get('/skills/create', [DashboardController::class, 'skillsCreate'])->name('admin.skills.create');
    Route::post('/skills/store', [DashboardController::class, 'storeSkills'])->name('admin.skills.store');
    Route::get('/skills/edit/{id}', [DashboardController::class, 'editSkills'])->name('admin.skills.edit');
    Route::post('/skills/update/{id}', [DashboardController::class, 'updateSkills'])->name('admin.skills.update');
    Route::get('/skills/delete/{id}', [DashboardController::class, 'destroySkills'])->name('admin.skills.delete');

    ################################## End Home & About Route #######################################


    ################################## Begin Resume Route #######################################

    Route::group(['prefix' => 'resume'], function () {

        Route::get('/summary', [DashboardController::class, 'summary'])->name('admin.summary');
        Route::post('/summary/update/{id}', [DashboardController::class, 'updateSummary'])->name('admin.summary.update');

        Route::get('/education', [DashboardController::class, 'education'])->name('admin.education');
        Route::get('/education/create', [DashboardController::class, 'createEducation'])->name('admin.education.create');
        Route::post('/education/store', [DashboardController::class, 'storeEducation'])->name('admin.education.store');
        Route::get('/education/edit/{id}', [DashboardController::class, 'editEducation'])->name('admin.education.edit');
        Route::post('/education/update/{id}', [DashboardController::class, 'updateEducation'])->name('admin.education.update');
        Route::get('/education/delete/{id}', [DashboardController::class, 'destroyEducation'])->name('admin.education.delete');

        Route::get('/experience', [DashboardController::class, 'experience'])->name('admin.experience');
        Route::get('/experience/create', [DashboardController::class, 'createExperience'])->name('admin.experience.create');
        Route::post('/experience/store', [DashboardController::class, 'storeExperience'])->name('admin.experience.store');
        Route::get('/experience/edit/{id}', [DashboardController::class, 'editExperience'])->name('admin.experience.edit');
        Route::post('/experience/update/{id}', [DashboardController::class, 'updateExperience'])->name('admin.experience.update');
        Route::get('/experience/delete/{id}', [DashboardController::class, 'destroyExperience'])->name('admin.experience.delete');


    });
    ################################## End Resume Route #######################################


    ################################## Begin Portfolio Route #######################################

    Route::get('/portfolioCategories', [DashboardController::class, 'portfolioCategories'])->name('admin.portfolioCategories');
    Route::get('/portfolioCategories/create', [DashboardController::class, 'createPortfolioCategories'])->name('admin.portfolioCategories.create');
    Route::post('/portfolioCategories/store', [DashboardController::class, 'storePortfolioCategories'])->name('admin.portfolioCategories.store');
    Route::get('/portfolioCategories/delete/{id}', [DashboardController::class, 'destroyPortfolioCategories'])->name('admin.portfolioCategories.delete');

    Route::get('/portfolioo', [DashboardController::class, 'portfolio'])->name('admin.portfolio');
    Route::get('/portfolioo/create', [DashboardController::class, 'createPortfolio'])->name('admin.portfolio.create');
    Route::post('/portfolioo/store', [DashboardController::class, 'storePortfolio'])->name('admin.portfolio.store');
    Route::get('/portfolioo/edit/{id}', [DashboardController::class, 'editPortfolio'])->name('admin.portfolio.edit');
    Route::post('/portfolioo/update/{id}', [DashboardController::class, 'updatePortfolio'])->name('admin.portfolio.update');
    Route::get('/portfolioo/delete/{id}', [DashboardController::class, 'destroyPortfolio'])->name('admin.portfolio.delete');

    ################################## End Portfolio Route #######################################
    ################################# Begin portfolioImages Route ####################################

    Route::group(['prefix' => 'portfolioImages'], function () {

        Route::post('/images', [DashboardController::class, 'savePortfolioImages'])->name('admin.portfolio.images.store');

    });
    ################################# End portfolioImages Route ####################################


    ################################# Begin contact & Mail Route ####################################

    Route::get('/contact', [DashboardController::class, 'contact'])->name('admin.contact');
    Route::get('/contact/delete/{id}', [DashboardController::class, 'destroyContact'])->name('admin.contact.delete');
    Route::get('/readMail/{id}', [DashboardController::class, 'readMail'])->name('admin.readMail');
    Route::get('/Mail/delete/{id}', [DashboardController::class, 'destroyMail'])->name('admin.Mail.delete');
    Route::get('/Mail/print/{id}', [DashboardController::class, 'printMail'])->name('admin.Mail.print');

    ################################# End contact & Mail Route ####################################


    ################################# End Social Media Route ####################################

    Route::get('/socialmedia', [DashboardController::class, 'social'])->name('admin.socialmedia');
    Route::get('/create/socialmedia', [DashboardController::class, 'createSocial'])->name('admin.createSocialMedia');
    Route::post('/socialmedia/store', [DashboardController::class, 'storeSocial'])->name('admin.socialmedia.store');
    Route::get('/socialmedia/edit/{id}', [DashboardController::class, 'editSocial'])->name('admin.socialmedia.edit');
    Route::post('/socialmedia/update/{id}', [DashboardController::class, 'updateSocial'])->name('admin.socialmedia.update');
    Route::get('/socialmedia/delete/{id}', [DashboardController::class, 'destroySocial'])->name('admin.socialmedia.delete');

    ################################# End contact & Mail Route ####################################

});


   ################################# Begin Guest Route ####################################


    Route::group(['middleware' => ['guest:admin']], function () {

        Route::get('/login', [LoginController::class, 'getLogin'])->name('admin.getLogin');
        Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
    });

  ################################# End Guest Route ####################################


