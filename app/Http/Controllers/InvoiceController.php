<?php

namespace App\Http\Controllers;

use App\InvoiceItem;
use App\InvoiceItemProduct;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){

        return view('invoice.index');
    }

    public function create(){
        return view('invoice.create');
    }
    public function getAllInvoiceItemProducts(){

        $rq = InvoiceItemProduct::orderBy('name')->get();


        // if(!isset($rq[0])){
        //     return [
        //         'success' => false,
        //         'message' => 'damit want something wrong'
        //     ];
        // }

        return [
            'success' => true,
            'data' => $rq
        ];


    }
}
