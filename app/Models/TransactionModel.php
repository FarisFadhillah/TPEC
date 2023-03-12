<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    use HasFactory;
    protected $table = "transactions";

    // public function join3tableSA()
    // {
    //     $builder = $table('transactions');
    //     $builder->select('customers.nama_cus, companies.nama_com, companies.harga_com, nama_device, companies.jenis_devices, couriers.nama_kurir, couriers.harga_kurir, keluhan, ppn, total_harga, bukti_pembayaran, status_transaksi, created_at');
    //     $builder->join('customers', 'customers.id = transactions.id_customer');
    //     $builder->join('companies', 'companies.id = transactions.id_company');
    //     $builder->join('couriers', 'couriers.id = transactions.id_courier');
    //     return $builder->get()->getResult();
    // }

}
