<h1>Edit Posts</h1>
<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $post->title }}">
    <label for="content">Content</label>
    <textarea name="content">{{ $post->content }}</textarea>
    <button type="submit">Update Post</button>
</form>


