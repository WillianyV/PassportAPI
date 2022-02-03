<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['address','number','district','zip_code','city','state'];

    public function company(){
        return $this->hasOne(Company::class, 'address_id');
    }

    public static function treatTheData($data)
    {
        $data['address']  = mb_strtoupper($data['address'], 'UTF-8');
        $data['number']   = strtoupper($data['number']);
        $data['district'] = mb_strtoupper($data['district'], 'UTF-8');
        $data['zip_code'] = str_replace(['-'], '', $data['zip_code']);
        $data['city']     = mb_strtoupper($data['city'], 'UTF-8');
        
        return $data;
    }
}
