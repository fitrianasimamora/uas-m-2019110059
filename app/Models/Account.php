<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['id', 'nama', 'jenis'];
    public $timestamps = true;

    public function transaction()
    {
        return $this->hasMany('App\Models\Transaction', 'account_id');
    }

    // public function publish(Account $account)
    // {
    //     $this->accounts()->save($account);
    // }
}
