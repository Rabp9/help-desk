<?php

namespace App\Controller;

/**
 * CakePHP EquiposController
 * @author Roberto
 */
class EquiposController extends AppController 
{
    public function index() {
        $this->viewBuilder()->layout("main");
    }

}