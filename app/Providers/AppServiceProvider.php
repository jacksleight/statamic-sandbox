<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JackSleight\StatamicBardMutator\Facades\Mutator;
use JackSleight\StatamicBardMutator\Support\Data;
use Statamic\Statamic;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Tiptap\Editor::class,
            \JackSleight\StatamicBardMutator\Editor::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Statamic::script('app', 'cp');
        Statamic::style('app', 'cp');

        // Mutator::html('paragraph', function ($value, $data) {
        //     if (($data->content[0]->type ?? null) === 'image') {
        //         return null;
        //     }

        //     return $value;
        // });

        // Mutator::html('paragraph', function ($value, $meta) {
        //     if (($meta['parent']->type ?? null) === 'listItem') {
        //         return null;
        //     }

        //     return $value;
        // });

        // Mutator::data('heading', function ($data) {
        //     $slug = str_slug(collect($data->content)->implode('text', ''));
        //     array_unshift(
        //         $data->content,
        //         Data::html('<a id="'.$slug.'" href="#'.$slug.'">#</a>')
        //     );
        // });

        // Mutator::html('image', function ($value) {
        //     return ['content' => view('partials/image', $value[1])];
        // });
    }
}
