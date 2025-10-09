<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\UseCases\CreateUserUseCase;
use App\Infrastructure\Persistence\EloquentUserRepository;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // バリデーション
        $data = $request->validate([
            'name'  => 'required|string',
            'email' => 'required|string|email',
        ]);

        // Repository を作る
        $repository = new EloquentUserRepository();

        // UseCase に渡す
        $useCase = new CreateUserUseCase($repository);

        // ユーザー作成 (ここは UseCase 内のメソッド名に合わせる)
        $user = $useCase->execute($data['name'], $data['email']);

        return response()->json([
            'name'  => $user->name,
            'email' => $user->email,
        ]);
    }
}
