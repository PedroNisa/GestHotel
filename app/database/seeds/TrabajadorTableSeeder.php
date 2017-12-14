<?php
/**
 * Created by PhpStorm.
 * User: miran
 * Date: 02/12/2017
 * Time: 8:36
 */

use Faker\Factory;
use Illuminate\Database\Seeder;

class TrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /*
         * El componente Faker es una librería de PHP que genera datos de prueba por nosotros.
         * Creamos una instancia del Faker\Generator.
         * Para que los datos sean en español le pasamos (es_ES) por parámetro.         * 
         */
        $faker = Factory::create('es_ES');
        //Una vez instanciado el generador podemos obtener datos aleatorios de diferentes tipos accediendo simplemente a propiedades del mismo
        //para crear varios datos de pruebas iteramos el metodo create
        for($i=0;$i<20;$i++){
            Trabajador::create([
                'nombre'  =>  $faker->firstName($gender = null|'male'|'female') ,
                'apellido1' =>  $faker->lastName,
                'apellido2'  =>  $faker->lastName,
                'dni'     =>  $faker->dni,
                'telefono' =>  $faker->numberBetween($min = 600000000, $max = 700000000),
                'email'  => $faker->email,
                'activo'  => 1,
                'direccion' =>$faker->address,
                'provincia' => $faker->state,
                'pais' => 'España'
            ]);
        }
    }
}