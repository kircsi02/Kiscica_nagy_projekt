<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('user.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function makeSession(Request $req)
    {
        $data = $req->input();
        $req->session()->put('id',$data['id']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // id,name,varos,current,goodguess
        User::create([
            'name' => $request->name,
            'varos' => $request->varos,
            'current' => $request->current,
            'goodguess' => $request->goodguess
        ]);
        return view('kepfelism');
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
    public function update(Request $request)
    {
        $good = DB::table('users')->where('id',$request->id)->value('goodguess');
        $current = DB::table('users')->where('id',$request->id)->value('current');
        $current++;
        DB::table('users')->where('id',$request->id)->update(array('current'=>$current));
        $sol = $request->sol;
        if ($sol == $request->megold) {
            $good++;
            DB::table('users')->where('id',$request->id)->update(array('goodguess'=>$good));
        }
        if ($current >= 16) {

            return view('eredmeny');
        }else{
            return  view('kepfelism');
        }
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
