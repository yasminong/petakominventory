<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roster;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RosterController extends Controller
{
    //display schedule table
    public function index()
    {
        $Roster = roster::all();
        return view('rosters.DutySlot', ['Roster' => $Roster]);
    }
     //display schedule table
     public function index1()
     {
         $Roster = roster::all();
         return view('rosters.AddDutySlot', ['Roster' => $Roster]);
     }
    public function index2()
    {
        $Roster = roster::all();
        return view('rosters.UpdateDutySlot', ['Roster' => $Roster]);
    }
     //create new slot
     public function create(Request $request)
     {
         Roster::create($request->all());
         return redirect('/rosters/AddDutySlot')->with('success', 'Success Create');
     }
    //edit cashier details
    public function edit($id)
    {
        $Roster = roster::find($id);
        return view('rosters.UpdateDutySlotForm', ['Roster' => $Roster]);
    }
    //update cashier details
    public function update(Request $request, $id)
    {
        $Roster=roster::find($id);
        $Roster->update($request->all());
        return redirect('/rosters/AddDutySlot')->with('success', 'Success Update');
    }
    //delete cashier details
    public function destroy($id)
    {
        $Roster = roster::find($id);
        $Roster->delete($Roster);
        return redirect('/rosters/AddDutySlot')->with('delete', 'Success Delete');
    }
    //view duty slot
    public function view()
     {
         $Roster = roster::all();
         return view('rosters.ViewDutySlot', ['Roster' => $Roster]);
     }
}
