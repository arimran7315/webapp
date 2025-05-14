<?php

use App\Livewire\Blog;
use App\Livewire\BlogDetail;
use App\Livewire\ContactUs;
use App\Livewire\Faqs;
use App\Livewire\Home;
use App\Livewire\Page;
use App\Livewire\ServiceDetail;
use App\Livewire\Services;
use App\Livewire\Team;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');

Route::get('/services',Services::class)->name('services');
Route::get('/service/{id}',ServiceDetail::class)->name('service-details');

Route::get('/teams',Team::class)->name('teams');
Route::get('/blogs',Blog::class)->name('blogs');
Route::get('/blog/{id}',BlogDetail::class)->name('blog-detail');
Route::get('/faqs',Faqs::class)->name('faqs');
Route::get('/page/{id}',Page::class)->name('page');
Route::get('/contact-us',ContactUs::class)->name('contact-us');
