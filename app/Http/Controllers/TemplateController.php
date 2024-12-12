<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Touttype;
use Illuminate\Support\Facades\DB;
use PDF;
use Intervention\Image\ImageManagerStatic as ImageBe;

class TemplateController extends Controller
{
    public function PageAjouter()
    {
        return view('add.ajouter');
    }


    public function Ajouter(Request $request){

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/images', $filename);

        /*$touttype = new Touttype();
        $touttype->caractere = $request->caractere;
        $touttype->nombre = $request->nombre;
        $touttype->daty = $request->daty;
        $touttype->times = $request->times;
        $touttype->datytime = $request->datybe;
        $touttype->image = $filename;
        $touttype->texte = $request->texte;
        $touttype->save(); */

        $image = $request->file('lieuImage');
    
        if ($image) {
            $image = ImageBe::make($image);
            $base64 = $image->encode('data-url')->encoded;

        $touttype = new Touttype();
        $touttype->caractere = $request->caractere;
        $touttype->nombre = $request->nombre;
        $touttype->daty = $request->daty;
        $touttype->times = $request->times;
        $touttype->datytime = $request->datybe;
        $touttype->image = $base64;
        $touttype->texte = $request->texte;
        $touttype->save();
            }
        }

    public function Liste()
    {
        $touttype = Touttype::all();
        $image = DB::select('Select * from test64');
        return view('liste.liste', compact('image','touttype'));
    }

    public function generatePDF($id)
    {
        $type = Touttype::find($id);
        $image = DB::select('Select * from test64');
        $pdf = PDF::loadView('pdf.PagePDF', compact('type','image'));
        return $pdf->download('touttype.pdf');
    }

    public function PagePDF($id)
    {
        $type = Touttype::find($id);
        $image = DB::select('Select * from test64');
        return view('pdf.PagePDF', compact('type','image'));
    }

    public function Update($i)
    {
        $image = DB::select('Select * from test64 where id='.$i);
        return view('liste.update', compact('image'));
    }

    public function UpdateConfirme(Request $request)
    {
        $image = $request->file('image');
        if ($image) {
        $image = ImageBe::make($image);
        $base64 = $image->encode('data-url')->encoded;

        $db = DB::insert("update test64 set image ='".$base64."' where id=".$request->id);
        
        return $this->Liste();
        }
    }
}
