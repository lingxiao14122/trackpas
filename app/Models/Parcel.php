<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parcel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'tracking_number',
        'weight',
        'sender_id',
        'sender_address',
        'sender_postcode',
        'recipient_firstname',
        'recipient_lastname',
        'recipient_address',
        'recipient_postcode',
        'recipient_phone',
        'courier_id',
        'status',
        'created_time',
        'arrived_time',
    ];

    public function details(){
        return $this->hasMany(Parcel_Details::class);
    }

    public function sender(){
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function courier(){
        return $this->belongsTo(User::class, 'courier_id');
    }
}
