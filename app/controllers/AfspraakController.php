<?php

class AfspraakController extends BaseController
{
    public $afspraakModel;

    public function __construct()
    {
        $this->afspraakModel = $this->model('Afspraak');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->afspraakModel->createAppointment($_POST);

           
            header("Refresh:3; " . URLROOT . "/AfspraakController/index");
             echo "Insert gelukt";
            exit();
        }
        /**
         * Met het $data-array geef ik informatie mee vanuit de controller
         * naar de view
         */
        $data = [
            'title' => 'Maak een afspraak'
        ];


        $appointments = $this->afspraakModel->getAppointments();
        $data = [
            'title' => 'Afspraak Overzicht',
            'appointments' => $appointments
        ];

        $this->view('afspraak/index', $data);
        /**
         * Met de view-method uit de BaseController-class roep je de
         * view aan en geef je de informatie uit het $data-array mee aan
         * de view
         */
        $this->view('afspraakcontroller/index', $data);
        

    }

}

