<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Url;
class Blog extends Component
{
    #[Url]
    public $categorySlug = null;
    public function render()
    {
        $categories = Category::where('status', '1')->withCount('articles')->paginate(10);
        $latestarticles = Article::orderBy('created_at','DESC')->limit(3)->get();
        if(!empty($this->categorySlug)){
            $category = Category::where('slug',$this->categorySlug)->first();
        if(empty($category)){
            abort(404);
        }
            $articles = Article::orderBy('created_at','DESC')
            ->where('category_id',$category->id)->paginate(10);
        }
        else{
            $articles = Article::orderBy('created_at','DESC')->paginate(10);
        }
        return view('livewire.blog',compact('articles','categories','latestarticles'));
    }
}
