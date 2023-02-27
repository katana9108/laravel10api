<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $tableName = 'invoices';
    protected $fillable =[
        'invoice_number',
        'total_vat',
        'total_price_excluding_vat',
        'total_price',
    ];

    /**
     *
     * @var array<string, string, string>
     *
     */

     protected $cast=[
        'total_vat'=>'decimal:2',
        'total_price'=>'decimal:2',
        'total_price_excluding_vat'=>'decimal:2',
     ];

     public function user():BelongsTo{
        return $this->belongs(User::class);
     }
}
