<?php

namespace App\Http\Controllers;

use App\Weight;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        $weightData = Weight::orderBy('tanggal', 'DESC')->get();

        $avgMax = Weight::avg('maxi');
        $avgMin = Weight::avg('mini');
        $avgPerbedaan = Weight::avg('perbedaan');

        return view('index', compact('weightData', 'avgMax', 'avgMin', 'avgPerbedaan'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $weightData = new Weight;
        $weightData->tanggal = $request->tanggal;
        $weightData->maxi = $request->maxi;
        $weightData->mini = $request->mini;
        $weightData->perbedaan = $weightData->maxi - $weightData->mini;

        $weightData->save();

        return redirect('/');
    }

    public function detail($id){
        $details = Weight::find($id);

        return view('detail', compact('details'));
    }

    public function edit($id){
        $weightData = Weight::find($id);

        return view('edit', compact('weightData'));
    }

    public function update(Request $request, $id){
        $weightData = Weight::find($id);
        $weightData->tanggal = $request->tanggal;
        $weightData->maxi = $request->maxi;
        $weightData->mini = $request->mini;
        $weightData->perbedaan = $weightData->maxi - $weightData->mini;

        $weightData->save();

        return redirect('/');
    }

}
