<?php

use Illuminate\Database\Seeder;
use App\Models\statusesModel;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        statusesModel::create(["name"=>"Activo","type_status_id"=>1]);
        statusesModel::create(["name"=>"Inactivo","type_status_id"=>2]);
        statusesModel::create(["name"=>"Indefinido","type_status_id"=>3]);
        statusesModel::create(["name"=>"Pendiente","type_status_id"=>3]);
        statusesModel::create(["name"=>"Solicitado","type_status_id"=>1]);
        statusesModel::create(["name"=>"En deudas","type_status_id"=>1]);
        statusesModel::create(["name"=>"Prueba","type_status_id"=>2]);
        statusesModel::create(["name"=>"Cancelado","type_status_id"=>3]);
        statusesModel::create(["name"=>"En riesgo","type_status_id"=>1]);
        statusesModel::create(["name"=>"Expirado","type_status_id"=>2]);
    }
}
