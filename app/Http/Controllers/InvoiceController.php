<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\InvoiceItem;
use App\InvoiceItemProduct;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){


        $inp = Invoice::All();

        return view('invoice.index',['invoices'=>$inp]);
    }

    public function create(){
        return view('invoice.create');
    }

    public function store(Request $request){

        $input = $request->all();

        $invoice = new Invoice();

        $invoice->sub_amount = $input['subTotal'];
        $invoice->percentage = $input['percentagePrice'];
        $invoice->amount = $input['totalPrice'];
        $invoice->save();


        foreach($input['invoiceItems'] as $item){
            $invoiceItem = new InvoiceItem();

            $invoiceItem->invoice_id = $invoice->id;
            $invoiceItem->invoice_item_product_id = $item['invoice_item_product_id'];
            $invoiceItem->quantity = $item['quantity'];
            $invoiceItem->price = $item['price'];
            $invoiceItem->save();



        }
        return[
            'success' => true
        ];
        // dd($input);


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
