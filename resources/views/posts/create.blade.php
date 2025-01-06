<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required>
    <label for="content">Content</label>
    <textarea name="content" id="content" required></textarea>
    <button type="submit">Save</button>
</form>
