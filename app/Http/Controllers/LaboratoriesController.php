<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laboratory;
use App\Models\Pasien;
use App\Models\Staff;

class LaboratoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$dtLaboratory = Laboratory::latest()->paginate(2);
         
         //$dtLaboratory = ('App\Models\Laboratory','pasien')->paginate(2);
        $dtLaboratory = Laboratory::with('pasien','staff')->paginate(4);
        return view('Laboratory.Data-lab', compact('dtLaboratory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pas = Pasien::all();
        $stf = Staff::all();
        return view('Laboratory.Create-lab',compact('pas', 'stf'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'id','acty_name','acty_type','units','result','interval_ranges', 'desc', 'tgl_periksa'
        Laboratory::create([
            'pasien_id' => $request->pasien_id,
            'acty_name' => $request->acty_name,
            'acty_type' => $request->acty_type,
            'units' => $request->units,
            'result' => $request->result,
            'interval_ranges' => $request->interval_ranges,
            'desc' => $request->desc,
            'tgl_periksa' => $request->tgl_periksa,
        ]);

         return redirect('data-lab')->with('success', 'Berhasil Tersimpan!');
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
        $pas = Pasien::all();
        $stf = Staff::all();
        $lb = Laboratory::findorfail($id);
        
        return view('Laboratory.Edit-lab', compact('lb', 'pas','stf'));
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
        $lb = Laboratory::findorfail($id);
        $lb->update($request->all());

        return redirect('data-lab')->with('success', 'Berhasil Tersimpan!');
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

    public function search(Request $request)
    {
        if(isset($_GET['search']) && $_GET['search'] !=null){

            $search_text = $_GET['search'];

            $rest = substr($_GET['search'], 3);
            
            $dtLaboratory = Laboratory::with('pasien')->where('pasien_id','LIKE','%'.$rest.'%') ->paginate(4);
        
            $dtLaboratory->appends($request->all());
           
            return view('Laboratory.Data-lab', compact('dtLaboratory','search_text'));
        }else{
            $dtLaboratory = Laboratory::with('pasien')->paginate(4);
            return view('Laboratory.Data-lab', compact('dtLaboratory'));    
        }

        
    }
  

}
