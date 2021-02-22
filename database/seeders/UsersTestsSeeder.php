<?php

namespace Database\Seeders;


use Eficaz\Affiliates\Models\UserTest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'seu_e-mail' => trans('front@eficazconsultoria.net.br'),
                'nome' => trans('Rafael Eficaz'),
                'e-mail' => Str::slug('emailrafael@eficazconsultoria.net.br'),
                'telefone' => trans('(14) 12345-1234'),
            ],
            [
                'seu_e-mail' => trans('front@eficazconsultoria.net.br'),
                'nome' => trans('Maria Eficaz'),
                'e-mail' => Str::slug('emailmaria@eficazconsultoria.net.br'),
                'telefone' => trans('(14) 54321-4321'),
            ],
        ];

        foreach ($users as $user) {
            if (UserTest::where('nome', $user['nome'])->exists()) {
                continue;
            }

            UserTest::create($accountType);
        }
    }
}
