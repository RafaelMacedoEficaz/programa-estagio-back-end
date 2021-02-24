<?php

namespace Database\Seeders;


use App\Models\UserTest;
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
                'seu_email' => trans('front@eficazconsultoria.net.br'),
                'nome' => trans('Rafael Eficaz'),
                'email' => trans('emailrafael@eficazconsultoria.net.br'),
                'telefone' => trans('(14) 12345-1234'),
                'rua' => 'Av. Higino Muzi Filho',
                'numero' => '529',
                'complemento' => 'Empresa',
                'bairro' => 'Mirante',
                'cidade' => 'Marília',
                'uf' => 'SP',
                'cep' => '17525-901'
            ],
            [
                'seu_email' => trans('front@eficazconsultoria.net.br'),
                'nome' => trans('Maria Eficaz'),
                'email' => trans('emailmaria@eficazconsultoria.net.br'),
                'telefone' => trans('(14) 54321-4321'),
                'rua' => 'Av. Higino Muzi Filho',
                'numero' => '529',
                'complemento' => 'Empresa',
                'bairro' => 'Mirante',
                'cidade' => 'Marília',
                'uf' => 'SP',
                'cep' => '17525-901'
            ],
        ];

        foreach ($users as $user) {
            if (UserTest::where('nome', $user['nome'])->exists()) {
                continue;
            }

            UserTest::create($user);
        }
    }
}
