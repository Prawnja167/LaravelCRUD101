<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activist;
use PhpParser\NodeVisitor\FirstFindingVisitor;
use function GuzzleHttp\Promise\all;

class AktivisController extends Controller
{
    public function storeAktivis(Request $request){
        $act = new Activist;
        $act->activist_name = $request->nama;
        $act->activist_nim = $request->nim;
        //dd($act);
        $act->save();
        return redirect('/aktivis');
    }

    public function viewAktivis(){
        $activists = Activist::all();
        // $a = "Nama aktivis: ";
        // foreach ($activists as $activist){
        //     $a = $a.", ".$activist->activist_name;
        // }
        // dd($a);
        return view('list', compact('activists'));
    }

    public function updateName($id){
        $act = Activist::where('id',$id)->first();
        $act->activist_name = $act->activist_name." jelek";
        $act->save();
        //dd($act->activist_name);
        return redirect('/view');
    }

    public function deleteAktivis(Request $request){
        $act = Activist::where('id',$request->id)->first();
        $act->delete();
        //dd($act->activist_name);
        return redirect('/view');
    }
}
