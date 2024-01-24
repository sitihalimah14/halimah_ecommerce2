<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    //MEMBUAT RELASI KE MODEL DISTRICT.PHP
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    protected $appends = ['status_label'];

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="badge bg-primary rounded-3 fw-semibold">Baru</span>';
        } elseif ($this->status == 1) {
            return '<span class="badge bg-warning rounded-3 fw-semibold">Dikonfirmasi</span>';
        } elseif ($this->status == 2) {
            return '<span class="badge bg-info rounded-3 fw-semibold">Proses</span>';
        } elseif ($this->status == 3) {
            return '<span class="badge bg-primary rounded-3 fw-semibold">Dikirim</span>';
        }
        return '<span class="badge bg-success rounded-3 fw-semibold">Selesai</span>';
    }

    //MEMBUAT RELASI KE TABLE ORDER_DETAILS DENGAN JENIS RELASI ONE TO MANY
    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function customer()
{
    return $this->belongsTo(Customer::class);
}
}
