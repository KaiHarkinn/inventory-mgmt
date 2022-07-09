<?php

namespace App\Models;

use App\Models\SupplierPhno;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address'
    ];
    public function supplierPhnos()
    {
        return $this->hasMany(SupplierPhno::class);
    }
}
