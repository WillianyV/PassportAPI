<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['cnpj', 'corporate_name', 'fantasy_name', 'status', 'address_id'];

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public static function treatTheData($data)
    {
        $data['cnpj']           = str_replace(['.', '-', '/'], '', $data['cnpj']);
        $data['corporate_name'] = mb_strtoupper($data['corporate_name'], 'UTF-8');
        $data['fantasy_name']   = mb_strtoupper($data['fantasy_name'], 'UTF-8');
        return $data;
    }
}
