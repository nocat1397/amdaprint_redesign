<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::all();
        
        return view('admin.enquiry.enquiries', compact('enquiries'));
    }
    public function store(Request $request)
    {
        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->mobile = $request->mobile;
        $enquiry->message = $request->message;
        $enquiry->save();

        return redirect()->back()->with('enquiry','Thank You');
    }
    public function destroy($id)
    {
        $enquiry = Enquiry::find(decrypt($id));
        $enquiry->delete();

        return redirect()->back();
    }
}
