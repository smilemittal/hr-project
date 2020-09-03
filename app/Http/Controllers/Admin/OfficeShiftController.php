<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\OfficeShift;
use Illuminate\Http\Request;

class OfficeShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexOfficeShift()
    {
    	try {
    			$office_shifts = OfficeShift::get();
       		return view('admin.office-shift.index' , compact('office_shifts'));
    	} catch (Exception $e) {
    			return redirect()->back()->with('error', $e->getMessage());
    	}
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createViewOfficeShift()
    {
    	try {
    		$weekdays = OfficeShift::WeekDays;
        return view('admin.office-shift.create', compact('weekdays'));
    	} catch (Exception $e) {
    		 return redirect()->back()->with('error', $e->getMessage());
    	}
    	 	
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postOfficeShift(Request $request)
    {
    	try {
    		$request->validate([
            'shift_name' => 'required',
            'weekday' => 'required',
            'from' => 'required|date_format:H:i',
            'to' => 'required|date_format:H:i',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'status' => 'required',
        ]);
        OfficeShift::create([
            'shift_name' => $request['shift_name'],
            'weekday' => $request['weekday'],
            'from' => $request['from'],
            'to' => $request['to'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'status' => $request['status'],
        ]);
        return redirect()->route('office-shift.index')->with('success' , 'Office Shift saved successfully.');
    	} catch (Exception $e) {
    		return redirect()->back()->with('error', $e->getMessage());
    	}
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewOfficeShiftDetail($id)
    {
    		try {
	        $office_shift = OfficeShift::where('id', decrypt($id))->first();
	        if($office_shift) {
	            return view('admin.office-shift.view',compact('office_shift'));
	        }
	        else {
	            return redirect()->back()->with('error' , 'wrong access.');
	        }
        } catch (Exception $e) {
    				return redirect()->back()->with('error', $e->getMessage());
    		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateOfficeShift($id)
    {
    	try {
		    		$weekdays = OfficeShift::WeekDays;
		        $office_shift = OfficeShift::where('id', decrypt($id))->first();
		        if($office_shift) {
		            return view('admin.office-shift.update' , compact('office_shift','weekdays'));
		        }
		        else {
		            return redirect()->back()->with('error' , 'wrong access.');
		        }
        } catch (Exception $e) {
    				return redirect()->back()->with('error', $e->getMessage());
    		}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePostOfficeShift(Request $request, $id)
    {
    	try {
	        $office_shift = OfficeShift::find(decrypt($id));
	        $request->validate([
	            'shift_name' => 'required',
	            'weekday' => 'required',
	            'from' => 'required|date_format:H:i',
	            'to' => 'required|date_format:H:i',
	            'start_date' => 'nullable|date',
	            'end_date' => 'nullable|date',
	            'status' => 'required'
	        ]);
	        $office_shift->update([
	            'shift_name' => $request['shift_name'],
	            'weekday' => $request['weekday'],
	            'from' => $request['from'],
	            'to' => $request['to'],
	            'start_date' => $request['start_date'],
	            'end_date' => $request['end_date'],
	            'status' => $request['status'],
	        ]);
	        return redirect()->back()->with('success' , 'Office Shift updated successfully.');
        } catch (Exception $e) {
    				return redirect()->back()->with('error', $e->getMessage());
    		}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteOfficeShift($id)
    {
         $office_shift = OfficeShift::find(decrypt($id));
        if($office_shift) {
            $office_shift->delete();
            return redirect()->back()->with('success' , 'Office Shift delete successfully.');
        }
        else {
            return redirect()->back()->with('error' , 'wrong access.');
        }
    }
}
