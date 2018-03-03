<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Run the States seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'name'    => 'Acre',
                'acronym' => 'AC'
            ], [
                'name'    => 'Alagoas',
                'acronym' => 'AL'
            ], [
                'name'    => 'Amazonas',
                'acronym' => 'AM'
            ], [
                'name'    => 'Amapá',
                'acronym' => 'AP'
            ], [
                'name'    => 'Bahia',
                'acronym' => 'BA'
            ], [
                'name'    => 'Ceará',
                'acronym' => 'CE'
            ], [
                'name'    => 'Distrito Federal',
                'acronym' => 'DF'
            ], [
                'name'    => 'Espírito Santo',
                'acronym' => 'ES'
            ], [
                'name'    => 'Goiás',
                'acronym' => 'GO'
            ], [
                'name'    => 'Maranhão',
                'acronym' => 'MA'
            ], [
                'name'    => 'Minas Gerais',
                'acronym' => 'MG'
            ], [
                'name'    => 'Mato Grosso do Sul',
                'acronym' => 'MS'
            ], [
                'name'    => 'Mato Grosso',
                'acronym' => 'MT'
            ], [
                'name'    => 'Pará',
                'acronym' => 'PA'
            ], [
                'name'    => 'Paraiba',
                'acronym' => 'PB'
            ], [
                'name'    => 'Pernambuco',
                'acronym' => 'PE'
            ], [
                'name'    => 'Piauí',
                'acronym' => 'PI'
            ], [
                'name'    => 'Paraná',
                'acronym' => 'PR'
            ], [
                'name'    => 'Rio de Janeiro',
                'acronym' => 'RJ'
            ], [
                'name'    => 'Rio Grande do Norte',
                'acronym' => 'RN'
            ], [
                'name'    => 'Rondônia',
                'acronym' => 'RO'
            ], [
                'name'    => 'Roraima',
                'acronym' => 'RR'
            ], [
                'name'    => 'Rio Grande do Sul',
                'acronym' => 'RS'
            ], [
                'name'    => 'Santa Catarina',
                'acronym' => 'SC'
            ], [
                'name'    => 'Sergipe',
                'acronym' => 'SE'
            ], [
                'name'    => 'São Paulo',
                'acronym' => 'SP'
            ], [
                'name'    => 'Tocantins',
                'acronym' => 'TO'
            ],
        ]);
    }
}
