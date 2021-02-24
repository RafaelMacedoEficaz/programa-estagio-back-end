<?php

namespace App\Http\Controllers;

use App\Http\Request\UserTestRequest;
use App\Models\UserTest;
use App\Repositories\UsertestRepository;
use Illuminate\Http\Request;

class UserTestController extends Controller
{
    /**
     * @var UsertestRepository $userTestRepository
     */
    private $repository;

//    public function __construct(UsertestRepository $repository)
//    {
//        $this->repository = $repository;
//    }

    public function show(int $user_id = null) {
        return UserTest::query()->where('id',$user_id)->first();
    }

    public function index(UserTest $userTest){
        return $userTest::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $userTest = new UserTest();

        $userTest->fill($data);

        if($userTest->save()){
            return response()->json([
                'message' => 'Usuário cadastrado com Sucesso!'
            ], 200);
        }

        return response()->json([
            'message' => 'Ocorreu um erro ao cadastrar o usuário!'
        ], 400);


    }

    public function update(Request $request, $user_test_id)
    {
        $data = $request->all();

        $userTest = UserTest::query()->where('id',$user_test_id)->first();

        if(!$userTest){
            return response()->json([
                'message' => 'Id do Usuário informado esta invalido!'
            ], 404);
        }

        $userTest->fill($data);

        if($userTest->save()){
            return response()->json([
                'message' => 'Usuário atualizado com Sucesso!'
            ], 200);
        }

        return response()->json([
            'message' => 'Ocorreu um erro ao atualizar as informações do usuário!'
        ], 400);

    }

    public function destroy($user_test_id)
    {
        if($user_test_id){
            $userTest = UserTest::query()->where('id',$user_test_id)->first();

            if(!$userTest){
                return response()->json([
                    'message' => 'Id do Usuário informado esta invalido!'
                ], 404);
            }

            if($userTest->delete()){
                return response()->json([
                    'message' => 'Usuário deletado com Sucesso!'
                ], 200);
            }

            return response()->json([
                'message' => 'Ocorreu um erro ao deletar o usuário informado!'
            ], 500);
        }

        return response()->json([
            'message' => 'Informe um id de usuário!'
        ], 403);
    }
}
