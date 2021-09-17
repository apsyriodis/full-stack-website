<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        return $contacts;
    }

    public function edit($id){
        $contact = Contact::find($id);

        return response()->json($contact);
    }

    public function update(Request $request, $id) {
        $contact = Contact::where('id', $id)->first();

        if($request->has('image') && !empty($request->image)) { // check for image
            $imageName = time () . '.' . $request->image->getClientOriginalExtenshion();
            $request->image->move(public_path('images/gallery'), $imageName);
            $path = ('public/images/gallery/'.$imageName);
            $contact->image = $path;
        }
    
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->bio = $request->bio;
        $contact->contact_no = $request->contact_no;

        if($contact->save()) {
            return response()->json(['status' => true, 'message' => 'Contact Updated Successfully']);
        }
        else {
            return response()->json(['status' => false, 'message' => 'Something has gone wrong. Please, try again']);
        }
    }

    public function store(Request $request){
        $contact = new Contact;

        if($request->has('image') && !empty($request->image)) { // check for image
            $imageName = time () . '.' . $request->image->getClientOriginalExtenshion();
            $request->image->move(public_path('images/gallery'), $imageName);
            $path = ('public/images/gallery/'.$imageName);
            $contact->image = $path;
        }
    
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->bio = $request->bio;
        $contact->contact_no = $request->contact_no;

        if($contact->save()) {
            return response()->json(['status' => true, 'message' => 'Contact Added Successfully']);
        }
        else {
            return response()->json(['status' => false, 'message' => 'Something has gone wrong. Please, try again']);
        }
    }

    public function create(){
        $contacts = Contact::all();

        return $contacts;
    }

    public function destroy($id) {
        $contact = Contact::find($id);
        
        if($contact->delete()){
            return response()->json(['status' => true, 'message' => 'Contact Deleted Successfully']);
        }
        else{
            return response()->json(['status' => false, 'message' => 'Something has gone wrong. Please, try again']);
        }
    }
}
