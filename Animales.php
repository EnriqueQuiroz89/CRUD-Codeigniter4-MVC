<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Animal;

class Animales extends Controller
{

    // SImples GET    
    public function listar()
    {
        $animal = new Animal();
        $datos['encabezado'] = view('templates/encabezado');
        $datos['pie'] = view('templates/piedepagina');
        $datos['animales'] = $animal->orderBy('id', 'desc')->findAll();

        return view('animales/listar', $datos);
        //regresar vistar listar
        //  return view('welcome_message');
    }
    public function crear()
    {
        $datos['encabezado'] = view('templates/encabezado');
        $datos['pie'] = view('templates/piedepagina');
        return view('animales/crear', $datos);
    }

    // Tipo Get por URL

    public function editar($id = null)
    {
        //1 va a leer el dato que le llega por url 
        //2 va a buscar ese registro en la base de date
        //3 va guardar los datos en un array bajo el nombr ede $datos ['animal']
        //4 va a retirnar la vista ediatr y le va a pasr por parametor $datos
        $animal = new Animal();
        $datos['encabezado'] = view('templates/encabezado');
        $datos['pie'] = view('templates/piedepagina');
        $datos['animal'] = $animal->where('id', $id)->first();
        // print_r($datos);
        return view('animales/editar', $datos);
    }


    public function eliminar($id = null)
    {
        $animal = new Animal();
        $animal->where('id', $id)->delete($id);
        print_r($id);

        return $this->response->redirect(base_url('/'));
        //  return view('welcome_message');
    }



    // tipo POST
    public function guardar()
    {
        $animal = new Animal();

        $request = \Config\Services::request();

        $nombre = $request->getVar('nombre');
        $especie = $request->getVar('especie');
        $pais = $request->getVar('pais');

        echo ($nombre);
        $datos = [
            'nombre' => $nombre,
            'especie' => $especie,
            'pais' => $pais,
        ];
        print_r($datos);
        $animal->insert($datos);
        return $this->response->redirect(base_url('/'));
    }

    public function actualizar()
    {   //    1 Va a recuerar los datos que le llegaron del formulario
        //    2 Con los datos va formmar un arreglo $datos
        //    3. crear un objeto Animal()
        //    4. con la instancia de Animal $animal va a buscar el registro\
        //5 Si existe va hacer un update con dos parametro $el id y $datos
        $request = \Config\Services::request();

        $id = $request->getVar('id');
        $nombre = $request->getVar('nombre');
        $especie = $request->getVar('especie');
        $pais = $request->getVar('pais');

        $datos = [
            'nombre' => $nombre,
            'especie' => $especie,
            'pais' => $pais
        ];

        print_r($datos);

        $animal = new Animal();
        $animal->update($id, $datos);

        return $this->response->redirect(base_url('/'));
    }
}
