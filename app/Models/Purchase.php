<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function rel_to_supplier(){
        return $this->belongsTo(Supplier::class,'suppliers_id');
    }
    public function rel_to_invoice(){
        return $this->belongsTo(Invoice::class,'invoices_id');
    }
}
