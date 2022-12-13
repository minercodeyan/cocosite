<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\MainSlider;
use App\Models\Product;
use App\Models\User;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        User::class => 'App\Http\Sections\Users',
        Product::class =>'App\Http\Sections\Products',
        Category::class =>'App\Http\Sections\Categories',
        MainSlider::class =>'App\Http\Sections\SliderItems'
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
