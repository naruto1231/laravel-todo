<!-- resources/views/todo.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <title>ToDo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

    <h1 class="mb-4">📝 ToDoリスト</h1>

    <form method="POST" action="/tasks" class="mb-4 d-flex">
        @csrf
        <input type="text" name="task" class="form-control me-2" placeholder="タスクを追加" required>
        <button type="submit" class="btn btn-primary">追加</button>
    </form>

    <ul class="list-group">
        @foreach($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>{{ $task->content }}</span>
            <form method="POST" action="/tasks/{{ $task->id }}" onsubmit="return confirm('削除しますか？');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">🗑</button>
            </form>
        </li>
        @endforeach
    </ul>

</body>
</html>
