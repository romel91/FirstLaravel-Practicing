<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is all tasks view</h1>
    {{--<h2>Name: {{ $name }}</h2>--}}
    {{--<h2>Total Task: {{ $total*100 }}</h2>--}}

    {{-- <h2>New Total: {{ $newTotal }}</h2> --}}

    {{--$tasks[0]['title']--}}
    @if (isset($tasks))

        @foreach ($tasks as $task)
            <h2>{{ $task['id'] }}</h2>
        @endforeach
    
    @endif

    <script>
        const tasks = @json($tasks);
        console.log(tasks);
    </script>

</body>
</html>
