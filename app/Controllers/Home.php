<?php

namespace App\Controllers;

use App\Models\Drumstore;
class Home extends BaseController
{

    public function formdata(): string
    {
        
        $result = array("nome" => $this->request->getVar("nome"),
                      "preco" => $this->request->getVar("preco"),
                      "quantidade" => $this->request->getVar("quantidade")
                      );

        $my_model = new Drumstore();
        $my_model->insert($result);
        
        return $this->info();
    }   
    public function delete(): string
    {
        $my_model = new Drumstore();
        $my_model->delete($this->request->getVar("hidden_value"));
        return $this->info();
    } 

    public function info(): string
    {
        $my_model = new Drumstore();
        $result = $my_model->findAll();
        $data['resultado'] = $result;

        return view('info', $data);
    }
}
