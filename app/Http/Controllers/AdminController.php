<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyModel;
use App\Models\CustomerModel;
use App\Models\CourierModel;
use App\Models\TransactionModel;

class AdminController extends Controller
{
    public function index()
    {
        $companyData = CompanyModel::all();
        $userCompData = CompanyModel::all();
        $userCustData = CustomerModel::all();
        $courierData = CourierModel::all();
        $transactionData = TransactionModel::all();
        return view('admin.index',compact('companyData','userCompData','userCustData','courierData','transactionData'));
    }// End Method

    public function getCompanyList()
    {
        $companyData = CompanyModel::all();
        return view('admin.page.company.company_view',compact('companyData'));

    }// End Method

    public function getUserCompList()
    {
        $userCompData = CompanyModel::all();
        return view('admin.page.user.user_comp_view',compact('userCompData'));

    }// End Method

    public function getUserCustList()
    {
        $userCustData = CustomerModel::all();
        return view('admin.page.user.user_cust_view',compact('userCustData'));

    }// End Method

    public function getCourierList()
    {
        $courierData = CourierModel::all();
        return view('admin.page.courier.courier_view',compact('courierData'));

    }// End Method
    
    public function getTransactionList()
    {
        $transactionData = TransactionModel::all();
        return view('admin.page.transaction.transaction_view',compact('transactionData'));

    }// End Method

}
