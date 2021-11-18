<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
            'nombres'=>'Alex Oscar',
            'apellidos'=>'Colque Solis',
            'edad'=>23,
            'sexo'=>'Masculino',
            'ci'=>8886555,
            'tipo_sangre'=>'A+',
            'telefono'=>67894356,
            'correo'=>'ale@gmail.com',
            'direccion'=>'Independencia y 27'
            ],
            [
            'nombres'=>'Alex Oscar',
            'apellidos'=>'Colque Solis',
            'edad'=>23,
            'sexo'=>'Masculino',
            'ci'=>8886555,
            'tipo_sangre'=>'A+',
            'telefono'=>67894356,
            'correo'=>'ale@gmail.com',
            'direccion'=>'Independencia y 27'
            ],
            [
            'nombres'=>'Alex Oscar',
            'apellidos'=>'Colque Solis',
            'edad'=>23,
            'sexo'=>'Masculino',
            'ci'=>8886555,
            'tipo_sangre'=>'A+',
            'telefono'=>67894356,
            'correo'=>'ale@gmail.com',
            'direccion'=>'Independencia y 27'
            ],
            [
            'nombres'=>'Alex Oscar',
            'apellidos'=>'Colque Solis',
            'edad'=>23,
            'sexo'=>'Masculino',
            'ci'=>8886555,
            'tipo_sangre'=>'A+',
            'telefono'=>67894356,
            'correo'=>'ale@gmail.com',
            'direccion'=>'Independencia y 27'
            ],
            [
            'nombres'=>'Alex Oscar',
            'apellidos'=>'Colque Solis',
            'edad'=>23,
            'sexo'=>'Masculino',
            'ci'=>8886555,
            'tipo_sangre'=>'A+',
            'telefono'=>67894356,
            'correo'=>'ale@gmail.com',
            'direccion'=>'Independencia y 27'
            ],
            [
            'nombres'=>'Andrea',
            'apellidos'=>'Colque Solis',
            'edad'=>23,
            'sexo'=>'Femenino',
            'ci'=>35368785,
            'tipo_sangre'=>'A+',
            'telefono'=>67894356,
            'correo'=>'andre@gmail.com',
            'direccion'=>'Independencia'
            ],
            [
            'nombres'=>'Oscar',
            'apellidos'=>'Colque Solis',
            'edad'=>23,
            'sexo'=>'Masculino',
            'ci'=>65576790,
            'tipo_sangre'=>'A+',
            'telefono'=>67894356,
            'correo'=>'osc@gmail.com',
            'direccion'=>'Independencia'
            ]
            ]);
    }
}
