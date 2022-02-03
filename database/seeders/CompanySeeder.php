<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cadastrando o endereço
        $address_data = [
            'address'  => 'Rua Santa Maria de Deus',
            'number'   => '774A',
            'district' => 'Floriano',
            'zip_code' => '54240580',
            'city'     => 'Jaboatão dos Guararapes',
            'state'    => 'PE'
        ];
        $address_data = Address::treatTheData($address_data);
        $address = Address::create($address_data);

        // cadastrando a empresa
        $company_data = [
            'cnpj'           => '71973226000117', 
            'corporate_name' => 'Mirella e Cauê Pizzaria Delivery Ltda', 
            'fantasy_name'   => 'Pizzaria Delivery', 
            'status'         => true, 
            'address_id'     => $address->id
        ];
        $company_data = Company::treatTheData($company_data);
        Company::create($company_data);
    }
}
