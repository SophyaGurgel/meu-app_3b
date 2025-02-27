<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- Aqui está a importação do HasFactory
use Illuminate\Database\Eloquent\Model;

class Company extends Model {
    use HasFactory;  // <-- Aqui você está usando o trait HasFactory

    protected $fillable = ['cnpj', 'company_name', 'address', 'phone'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
