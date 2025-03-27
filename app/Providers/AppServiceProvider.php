<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JackSleight\StatamicBardMutator\Facades\Mutator;
use JackSleight\StatamicBardMutator\Support\Data;
use Statamic\Statamic;
use Statamic\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Statamic::script('app', 'cp');
        Statamic::style('app', 'cp');

        // Mutator::html('heading', function ($value, $item) {
        //     if ($item->attrs->level === 1) {
        //         $value[1]['class'] = 'mt-2 text-3xl md:text-6xl md:leading-tight';
        //     }

        //     if ($item->attrs->level === 2) {
        //         $value[1]['class'] = 'mb-10 text-3xl md:text-5xl';
        //     }

        //     if ($item->attrs->level === 3) {
        //         $value[1]['class'] = 'mt-2 mb-5 text-4xl';
        //     }

        //     if ($item->attrs->level === 4) {
        //         $value[1]['class'] = 'mt-2 mb-5 text-xl';
        //     }

        //     if ($item->attrs->level === 5) {
        //         $value[1]['class'] = 'mt-2 mb-5 text-lg';
        //     }

        //     if ($item->attrs->level === 6) {
        //         $value[1]['class'] = 'mt-2 mb-5';
        //     }

        //     return $value;
        // });

        // Mutator::html('bulletList', function ($value) {
        //     $value[1]['class'] = 'list-disc my-2 pl-6';

        //     return $value;
        // });

        // Mutator::html('orderedList', function ($value) {
        //     $value[1]['class'] = 'list-decimal my-2 pl-6';

        //     return $value;
        // });

        // Mutator::html('link', function ($value) {
        //     $value[1]['class'] = 'transition hover:opacity-60';

        //     return $value;
        // });

        // Mutator::html('horizontal_rule', function ($value) {
        //     $value[1]['class'] = 'my-5 md:my-10';

        //     return $value;
        // });

        // Mutator::html('paragraph', function ($value) {
        //     $value[1]['class'] = 'mb-4 last-of-type:mb-0';

        //     return $value;
        // });

        // \Statamic\Fieldtypes\Radio::appendConfigField('help_text', [
        //     'type' => 'bard',
        //     'display' => 'Help',
        //     'instructions' => 'Provide additional help with rich text formatting. Include links to articles, FAQs, and videos for further guidance.',
        //     'buttons' => [
        //         'bold',
        //         'italic',
        //         'anchor',
        //         'bts_pins',
        //     ],
        //     'bts_pins' => [
        //         'icon',
        //     ],
        // ]);

        // Mutator::html('heading', function ($value, $data, $meta) {
        //     if ($meta['bard']->handle() === 'bard_1') {
        //         $value[1]['id'] = str_slug(collect($data->content)->implode('text', ''));
        //     }

        //     return $value;
        // });

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

        // Mutator::data('link', function ($data, $meta) {
        //     $node = $meta['parent'];
        //     $href = $data->attrs->href;
        //     $text = $node->text;
        //     $email = Str::after($href, 'mailto:');
        //     if (! Str::startsWith($href, 'mailto:')) {
        //         return;
        //     }

        //     $data->attrs->href = Statamic::modify($email)->obfuscate()->fetch();

        //     // if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     //     return;
        //     // }

        //     // preg_match('#<a href="(.*)">(.*)<\/a>#', Statamic::modify($email)->mailto()->fetch(), $matches);

        //     // $innerText = ! filter_var($text = trim($node->text), FILTER_VALIDATE_EMAIL) ? $text : $matches[2];

        //     // $attributes = collect($data->attrs)
        //     //     ->reject(fn ($val, $key) => $key === 'href' || empty($val))
        //     //     ->map(fn ($val, $key) => $key.'="'.$val.'"')
        //     //     ->flatten()
        //     //     ->implode(' ');

        //     // $node->html = '<a href="'.$matches[1].'"'.(! empty($attributes) ? " {$attributes}" : '').'>'.$innerText.'</a>';

        //     // $node->type = 'bmuHtml';
        //     // $node->marks = [];
        // });
    }
}
