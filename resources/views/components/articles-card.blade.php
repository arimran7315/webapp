<div class="col-md-6" data-aos="fade">
    <article class="blog-post">
        <div class="post-slider slider-sm rounded">
            <img loading="lazy" decoding="async" src="{{asset('storage/'.$article->image)}}" alt="Post Thumbnail">
            
        </div>
        <div class="pt-4">
            <p class="mb-3">{{\Carbon\Carbon::parse($article->created_at)->format('d-F-Y')}}</p>
            <h2 class="h4"><a class="text-black" href="{{route('blog-detail',$article->id)}}" wire:navigate>{{$article->title}}</a></h2>
            {{-- <p>Heading example Here is example of hedings. You can use this heading by following …</p>  --}}
            <a href="{{route('blog-detail',$article->id)}}" wire:navigate class="text-primary fw-bold" aria-label="Read the full article by clicking here">Read More</a>
        </div>
    </article>
</div>  