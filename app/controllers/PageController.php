<?php

namespace App\Controllers;

use Core\Controller;
use Exception;
use JoelWalls\PicoYPlaca\Predictor;

class PageController extends Controller
{
    public function index()
    {
        return $this->render('page/index');
    }

    public function process()
    {
        try {
            $predictor = new Predictor(
                $this->request->getParam('placa'), 
                $this->request->getParam('fecha'), 
                $this->request->getParam('hora')
            );

            return $this->render('page/index', [
                'prediccion' => $predictor->canDrive() ? 'Si puede salir' : 'No puede salir', 
            ]);
        } catch (Exception $e)
        {
            return $this->render('page/index', [
                'error' => $e->getMessage(), 
            ]);
        }
    }
}