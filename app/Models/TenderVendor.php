<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class TenderVendor extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tender_vendors';
    protected $fillable = ['tender_id', 'vendor_id'];
    protected $casts = [];


}
