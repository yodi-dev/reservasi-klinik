<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\DoctorModel;

class ReservationController extends BaseController
{
    protected $reservationModel;
    protected $doctorModel;

    public function __construct()
    {
        $this->reservationModel = new ReservationModel();
        $this->doctorModel = new DoctorModel();
    }

    public function index()
    {
        $data['doctors'] = $this->doctorModel->findAll();
        return view('reservation_form', $data);
    }

    public function save()
    {
        $this->reservationModel->save([
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'doctor_id' => $this->request->getPost('doctor_id'),
            'reservation_date' => $this->request->getPost('reservation_date'),
            'status' => 'Pending',
        ]);

        return redirect()->to('/reservation');
    }
}
