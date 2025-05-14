<?php

namespace App\Filament\Resources\ArticleResource\Widgets;

use App\Models\Article;
use Filament\Widgets\Widget;

class CustomDataWidget extends Widget
{
    protected static string $view = 'filament.resources.article-resource.widgets.custom-data-widget';
    public function getData(): array
    {
        return [
            'totalArticles' => Article::count(),
            'recentArticles' => Article::with('category')->latest()->take(5)->get(),
        ];
    }
}
