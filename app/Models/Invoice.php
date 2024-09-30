<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function rel_to_customer(){
        return $this->belongsTo(Customer::class,'customers_id');
    }
    public function rel_to_medicine(){
        return $this->belongsTo(Medicine::class,'medicines_id');
    }
}
