<?php
// app/Models/BankLedger.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankLedger extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'transaction_type',
        'amount',
        'description',
    ];
}
