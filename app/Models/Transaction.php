<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['kategori', 'nominal', 'tujuan',  'accound_id'];
    public $timestamps = true;

    public function author()
    {
        return $this->belongsTo('App\Models\Account', 'transaction_id');
    }
}
