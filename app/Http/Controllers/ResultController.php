<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        return view('home',["data"=>Result::all()]);
    
    }
    public function views()
    {
        return view('view',["data"=>Result::all()]);
    
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
    public function store(Request $req)
    {
        $req->validate([
            'type'=>'required',
            'course'=>'required',
            'college_name'=>'required',
            'city'=>'required',
            'disit'=>'required',
            'description'=>'required',
            'state'=>'required',
            'est_year'=>'required|date',
            'contact'=>'required|min:10',
            'website'=>'required',
            'image'=>'required|mimes:jpg,png'

        ]);
        $filename=time(). ".".$req->image->extension();
        $req->image->move(public_path('images'),$filename);
        Result::create([
            'type'=>$req->type,
            'course'=>$req->course,
            'college_name'=>$req->college_name,
            'city'=>$req->city,
            'disit'=>$req->disit,
            'description'=>$req->description,
            'state'=>$req->state,
            'est_year'=>$req->est_year,
            'contact'=>$req->contact,
            'website'=>$req->website,
            'image'=>$filename

        ]);
        return redirect()->route('homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
    
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit($edit_id)
    {
        $data["record"]=Result::find($edit_id);
        return view('edit',$data);
    }
    
    public function updateResult(Request $req){
        $req->validate([
            'name'=>'required',
            'father'=>'required',
            'contact'=>'required|min:8',
            'email'=>'required|email',
            'school'=>'required|min:5',
            'city'=>'required',
            'dob'=>'required|date',
            'gender'=>'required',
            'roll_no'=>'required',
            'roll_code'=>'required',
            'math'=>'required|max:3',
            'science'=>'required|max:3',
            'sst'=>'required|max:3',
            'hindi'=>'required|max:3',
            'english'=>'required|max:3',
        ]);
          Result::find($req->id)->update([
            'name'=>$req->name,
            'father'=>$req->father,
            'contact'=>$req->contact,
            'email'=>$req->email,
            'school'=>$req->school,
            'city'=>$req->city,
            'dob'=>$req->dob,
            'gender'=>$req->gender,
            'roll_no'=>$req->roll_no,
            'roll_code'=>$req->roll_code,
            'math'=>$req->math,
            'science'=>$req->science,
            'sst'=>$req->sst,
            'hindi'=>$req->hindi,
            'english'=>$req->english,
        ]);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Result::find($id)->delete();
        return redirect()->back();
    }
}
