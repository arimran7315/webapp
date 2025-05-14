<x-filament-widgets::widget>
    <x-filament::section>
       <div class="p-4 bg-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Custom Data</h2>
    <p>Total Articles: {{ $this->getData()['totalArticles'] }}</p>
    
    <h3 class="mt-4 text-md font-medium">Recent Articles</h3>
    <ul class="list-disc pl-5">
        @foreach($this->getData()['recentArticles'] as $article)
            <li>{{ $article->title }} (Category: {{ $article->category?->name ?? 'N/A' }}, Published: {{ $article->created_at->format('Y-m-d') }})</li>
        @endforeach
    </ul>
</div>
    </x-filament::section>
</x-filament-widgets::widget>
