<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

// ユーザー作成API
Route::post('/users', [UserController::class, 'store']);

// 数字チェックフォーム
Route::get('/number-check', function () {
    return view('number-check.form');
});

Route::post('/number-check', function (Request $request) {
    $number = $request->input('number');

    if (!is_numeric($number)) {
        $result = "数字を入力してください";
    } elseif ($number % 2 === 0) {
        $result = "{$number}は偶数です。";
    } else {
        $result = "{$number}は奇数です。";
    }

    return view('number-check.result', compact('number', 'result'));
});

// テスト用
Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is page</p></body></html>';
});

// タスク管理
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

// SQLiteチェック
Route::get('/check-sqlite', function () {
    $path = database_path('database.sqlite');
    if (file_exists($path)) {
        return "SQLite file exists at: " . $path;
    } else {
        return "SQLite file NOT found at: " . $path;
    }
});
