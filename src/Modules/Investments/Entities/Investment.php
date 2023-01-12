<?php

namespace Modules\Investments\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Payments\Entities\Payment;

class Investment extends Model
{
    //use HasFactory;

    protected $guarded = [];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
//    protected static function newFactory()
//    {
//        return \Modules\Investments\Database\factories\InvestmentFactory::new();
//    }
//    public function investmentName()
//    {
//        return $this->title . '(' . $this->proposed_amount . ')';
//    }
}
