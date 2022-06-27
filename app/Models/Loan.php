<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Loan extends Model
{
    use HasFactory;


     protected $fillable = [
        'account_id',
        'bank_id',
        'admin_id',
        'amount',
        'type',
        'interest',
        'number',
        'Emi_amount',
        'ac_num',
        'payable',

       
    ];

    public function Account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }


    public function admin()
    {
        return $this->hasMany(Admin::class);
    }


     public function Bank()
    {
        return $this->belongsTo(Bank::class, 'account_id');
    }


    public function Emis()
    {
        return $this->hasMany(Emi::class, 'loan_id');
    }


    public function Getemis()
    {
        return $this->hasMany(Emi::class, 'loan_id')->whereDate('created_at', Carbon::today());
    }


    public function Grantees()
    {
        return $this->hasMany(Grantee::class, 'loan_id');
    }

}
