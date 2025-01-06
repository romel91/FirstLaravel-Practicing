<h1>All Posts</h1>
<a href="{{ route('posts.create') }}">Create New Post</a>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
@endforeach
```
This code will display a list of all posts, with a link to create a new post. The `create` method in the `PostsController` will display a form to create a new post, and the `store` method will save the new post to the database. The `index` method will display all posts in the database.  The `show` method will display a single post. The `edit` method will display a form to edit a post, and the `update` method will save the updated post to the database. The `destroy` method will delete a post from the database.
