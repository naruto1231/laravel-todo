<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ToDoアプリ</title>
</head>
<body>
    <h1>ToDoリスト</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="タスクを追加">
        <button type="submit">追加</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <form action="{{ route('tasks.update', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button type="submit">{{ $task->completed ? '✔️' : '⬜' }}</button>
                </form>
                {{ $task->title }}
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
