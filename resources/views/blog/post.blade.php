<article>
    <header>
        <span class="date">{{ $post->created_at->toFormattedDateString()}}</span>
        <h2><a href="/post/{{ $post->id }}">{{ $post->title ]}</a></h2>
    </header>
    <a href="/post/{{ $post->id }}" class="image fit"><img src="/image/{{ $post->image }}" alt="" /></a>
    <p>{{ $post->snippet }}</p>
</article>