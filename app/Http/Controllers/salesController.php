<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ps=DB::table('saless')->get();
       return view('sales.index',['sales'=>$ps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('saless')->insert(
            [
                    'refrences_no' => $request->number,
                    'product' => $request->product,
                    'tax'=> $request->tax,
                    'total'=> $request->total,
                    'discount'=> $request->discount,
                    'note'=> $request->note
                 

            ]
            );

            return redirect()->route('sales.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $p = DB::table('product')->get();
        return view('sales.add',['showProduct'=>$p]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p=DB::table('saless')->where('id',$id)->get();
        return view('sales.edit',['editSales'=>$p]);
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
       DB::table('saless')->where('id',$id)->update(
           [
               'refrences_no'=> $request->number,
               'product'=>$request->product,
               'tax'=>$request->tax,
               'total'=>$request->total,
               'note'=>$request->note,
               'discount'=>$request->discount
           ]
           );
       return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('saless')->where('id',$id)->delete();
        return redirect()->route('sales.index');
    }
    public function generatePDF($id)
    {
        $ps=DB::table('saless')->where('id',$id)->get();
        $pdf = PDF::loadView('sales.mypdf',['sales'=> $ps]);

        return $pdf->download('sales.pdf');
    }
}
