<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = []; //UNTUK MENGIZINKAN MENYIMPAN DATA

    protected $appends = ['status_label'];

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="badge bg-warning rounded-3 fw-semibold">Menunggu Konfirmasi</span>';
        }
        return '<span class="badge bg-success rounded-3 fw-semibold">Diterima</span>';
    }
}