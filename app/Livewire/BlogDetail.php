<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{
    public $articleId = null;
    public function mount($id){
        $this->articleId = $id;
    }
    public function render()
    {
        $article = Article::select('articles.*','categories.name as category_name')->leftJoin('categories','categories.id','articles.category_id')->findOrFail($this->articleId);   
        return view('livewire.blog-detail',[
            'article'=>$article
        ]);
    }
}
