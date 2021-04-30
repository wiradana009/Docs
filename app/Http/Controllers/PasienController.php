<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;
use App\Models\Laboratory;
use PDF;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPasien = Pasien::latest()->paginate(4);
        return view('Pasien.Data-pasien', compact('dtPasien'));
    }

    public function cetakPasien()
    {
        $dtPasienP = Pasien::latest()->get();
        return view('Pasien.Cetak-data-pasien', compact('dtPasienP'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pas = Pasien::all();
        return view('Pasien.Create-pasien', compact('pas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'id','nama','alamat','tgl_lahir','gender', 'phone_email'
       // dd($request->all());
        Pasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'phone_email' => $request->phone_email,
        ]);

        return redirect('data-pasien')->with('success', 'Berhasil Tersimpan!');
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
        $ps = Pasien::findorfail($id);
        
        return view('Pasien.Edit-pasien', compact('ps'));
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
        $ps = Pasien::findorfail($id);
        $ps->update($request->all());

        return redirect('data-pasien')->with('success', 'Berhasil Tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ps = Pasien::findorfail($id);
        $ps->delete();
        return back()->with('info', 'Berhasil Dihapus!');
    }

    public function search(Request $request)
    {
        if(isset($_GET['search']) && $_GET['search'] !=null){

            $search_text = $_GET['search'];

            $rest = substr($_GET['search'], 3);
            $dtPasien = Pasien::latest()->where('nama','LIKE','%'.$search_text.'%')->orWhere('id','LIKE','%'.$rest.'%') ->paginate(4);
            $dtPasien->appends($request->all());
           
            return view('Pasien.Data-pasien', compact('dtPasien','search_text'));
        }else{
            $dtPasien = Pasien::latest()->paginate(4);
            return view('Pasien.Data-pasien', compact('dtPasien'));    
        }

        
    }


    public function view($id)
    {
        $ps = Pasien::findorfail($id);
        //$lb = Laboratory::all();
         $dtLaboratory = Laboratory::latest()->where('pasien_id', $id)->get();
        return view('Pasien.View-pasien', compact('ps', 'dtLaboratory'));
    }

    public function cetakPasienReport($id)
    {
        $ps = Pasien::findorfail($id);
        $dtPasienP = Laboratory::latest()->where('pasien_id', $id)->get();
        return view('Pasien.View-pasien-report', compact('ps','dtPasienP'));
    }

   

    public function downloadPDF(){
        // $dtPasienP = Pasien::latest()->get();
        // return view('Pasien.Cetak-data-pasien', compact('dtPasienP'));

        $dtPasienP = Pasien::all();
        $pdf = PDF::loadView('Pasien.Cetak-data-pasien', compact('dtPasienP'));
        return $pdf->download('pasien.pdf');
    }

    public function downloadPDF2($id){
        $ps = Pasien::findorfail($id);
        $dtPasienP = Laboratory::latest()->where('pasien_id', $id)->get();
        $pdf = PDF::loadView('Pasien.View-pasien-report', compact('ps','dtPasienP'));
        
        $pdf->save(storage_path('public\invoice.pdf'));
        // Laboratory::put('public/pdf/invoice.pdf', $pdf->output());
        return response()->file(storage_path('public\invoice.pdf'));
        // return $pdf->download('Medical Report PSN'.$id.'.pdf');
    }
  

}
