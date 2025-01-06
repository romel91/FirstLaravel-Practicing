<h1>Show Post</h1>
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Post</button>
</form>