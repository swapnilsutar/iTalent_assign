<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
use App\Models\Sale;


class UserController extends Controller
{
    public function index(Request $req){

    $req->session()->put('data',$req->input());

    return redirect('home');

    }

    public function store(Request $req){

        $sale = new Sale;

        $sale->product = $req->product;
        $sale->quantity= $req->quantity;
        $sale->total = $req->total;
        $sale->user = $req->user;

        $sale->save();

        return redirect('order')->with('status',"Your order Recorded.");

    }

     function piechart(){

        // $data = Sale::select('product',DB::raw('sum(quantity) as quantity'))
        //             ->groupBy('product')
        //             ->get();

        $data = DB::table('sales')
                ->select(
                    DB::raw('product as product'),
                    DB::raw('sum(quantity) as quantity'))
                ->groupBy('product')
                ->get();


        // $data = DB::table('sales')
        //             ->select(
        //             DB::raw('product as product'),
        //             DB::raw('sum(quantity) as quantity'))
        //             ->groupBy('product')
        //             ->get();

        $array[] = ['product', 'quantity'];

        foreach($data as $key => $value)
        {
         $array[++$key] = [$value->product, (int)$value->quantity];
        }
        
        // return $array;
        return view('report')->with('dataa', json_encode($array));

        // return view('report',['dataa'=>$data]);
        
        // return view('report')->with('products',$da);

    }

    function barchart(){

        $sales = Sale::select(
            DB::raw('product as product'),
            DB::raw('sum(quantity) as quantity'))
        ->groupBy('product')
        ->get();

        return view('barchart');


    }

}
