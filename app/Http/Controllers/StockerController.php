<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use App\Item;
use App\Stocker;
class StockerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stocker.instock_stocker');
    }

    public function goingOutStock()
    {
        return view('stocker.outgoing_stock');
    }

    public function importExcel(Request $request)
    {

        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function($reader) {})->get();

            if(!empty($data) && $data->count()){

                foreach ($data->toArray() as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $value) {        
                            $insert[] = ['title' => $value['title'], 'description' => $value['description']];
                        }
                    }
                }
                if(!empty($insert)){
                    Item::insert($insert);
                    return back()->with('success','Insert Record successfully.');
                }
            }

        }

        return back()->with('error','Please Check your file, Something is wrong there.');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id=Auth::id();
        $stock = new Stocker;
        $stock->user_id                  =$user_id;
        $stock->product_name             =Input::get('product_name');
        $stock->voucher_number           =Input::get('voucher_number');
        $stock->quantity_out             =Input::get('quantity_out    ');
        $stock->outgoing_stock           =Input::get('outgoing_stock');
        $stock->comment                  =Input::get('comment');

        $stock->save();
        return redirect('/outgoing_stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
