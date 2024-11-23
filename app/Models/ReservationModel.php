<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'phone',
        'doctor_id',
        'reservation_date',
        'status'
    ];
}
