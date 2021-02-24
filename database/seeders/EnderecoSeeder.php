<?php

namespace Database\Seeders;

use App\Models\Endereco;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enderecos = [
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

        foreach ($enderecos as $street) {
            if (Endereco::where('nome', $street['nome'])->exists()) {
                continue;
            }

            Endereco::create($user);
        }
    }
}
