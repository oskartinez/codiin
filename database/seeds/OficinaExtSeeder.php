<?php

use Illuminate\Database\Seeder;

class OficinaExtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // buscamos un perfil para usuario, si no existe lo creamos
        $perfil = DB::select('select * from perfil where id_perfil = ?', [1]);
        if(count($perfil) == 0) {
            DB::table('Perfil')->insert([
                'nombre'=> 'RESPONSABLE'
            ]);
            echo 'Se agregó un registro a la tabla PERFIL';
        };

        // // creamos primero un responsable
        $responsable = DB::select('select * from UsuarioOfExt where nombres = ?', ['Nicolas Antonio']);
        if(count($responsable) == 0) {
            DB::table('UsuarioOfExt')->insert([
                'cargo'=> 'Subjefe',
                'nombres'=> 'Nicolas Antonio',
                'apellido'=> 'Suarez',
                'tipo_documento'=> 'DNI',
                'nro_documento' => '25.122.345',
                'usuario'=> 'nsuarez',
                'clave'=> bcrypt('123123'),
                'habilitado'=> false,
                'id_perfil'=> 1
            ]);
            echo 'Se agregó un registro a la tabla RESPONSABLE';
        };

        // luego le asignamos la oficina
        DB::table('Oficina_externa')->insert([
            'nombre'=> 'DEPARTAMENTO DE ASESORIA LETRADA',
            'direccion'=> 'San Luis 544',
            'telefono'=> '544-21777',
            'email'=> 'aseletra@policia.chaco.gov.ar',
            'id_responsable' => 1,
            'activadoPorCodigo' => true,
            'codigoActivacion'=> substr(bcrypt('DEPARTAMENTO DE ASESORIA LETRADA'), 0,8)
        ]);

    }
}
