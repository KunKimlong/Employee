<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // return $request;
        $name = $request->name;
        $gender = $request->gender;
        $position = $request->input('position');
        $rank = $request->input('rank');
        $phone = $request->input('phone');
        // return $name.$gender.$position.$rank.$salary;

        Employee::create([
            "name"=>$name,
            "gender"=>$gender,
            "position"=>$position,
            "rank"=>$rank,
            "phoneNumber"=>$phone,
        ]);

        return redirect('/add')->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
