<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('admin.contact.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
       
    }

}
