<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\DoctorModel;

class AdminController extends BaseController
{
    protected $reservationModel;

    public function __construct()
    {
        $this->reservationModel = new ReservationModel();
    }

    public function index()
    {
        // Ambil semua data reservasi
        $data['reservations'] = $this->reservationModel->findAll();
        return view('admin_dashboard', $data); // Kirim data ke view
    }

    public function updateStatus($id, $status)
    {
        // Update status reservasi berdasarkan ID
        $this->reservationModel->update($id, ['status' => $status]);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        // Hapus reservasi berdasarkan ID
        $this->reservationModel->delete($id);
        return redirect()->to('/admin');
    }
}
