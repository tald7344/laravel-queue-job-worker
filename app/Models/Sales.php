<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'Region',
        'Country',
        'Item Type',
        'Sales Channel',
        'Order Priority',
        'Order Date',
        'Order ID',
        'Ship Date',
        'Units Sold',
        'Unit Price',
        'Unit Cost',
        'Total Revenue',
        'Total Cost',
        'Total Profit',
    ];

}
