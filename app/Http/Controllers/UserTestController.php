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

    public function store(UserTestRequest $userTestRequest)
    {
        dd("store");
        $data = $userTestRequest->validated();
dd($data);
        $userTest = new UserTest();

        $userTest->fill($data);

        return $userTest->save();

    }

    public function update(UserTestRequest $userTestRequest)
    {
        $data = $userTestRequest->validated();

        $userTest = UserTest::query()->find($data->id)->first();
        $userTest = $data;

        return $userTest->save();
    }

    public function delete(UserTestRequest $userTestRequest)
    {
        $data = $userTestRequest->validated();
    }
}
