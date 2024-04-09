<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'nationality',
        'visitor',
        'hostelry',
        'total_ticket',
        'ticket_price',
        'total_payment',
        'payment_method',
        'total_drink',
        'drink_price',
        'total_payment_drink',
        'payment_method_drink',
        'total_commission',
        'commission_receiver',
        'name_receiver',
        'receiver_car_plate'
    ];
}
