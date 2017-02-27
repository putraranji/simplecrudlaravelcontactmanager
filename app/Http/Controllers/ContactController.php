<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactModel;

class ContactController extends Controller
{
    public function index(Request $request){
      $title  = "List of Contact";
      $contacts = ContactModel::orderBy('id', 'DESC')->paginate(3);
      return view('contact.index', compact('contacts', 'title'))->with('i', ($request->input('page', 1) - 1 ) * 3);
    }

    public function create(){
      return view('contact.create');
    }

    public function store(Request $request){
      $this->validate($request, [
        'uname' => 'required',
        'fullname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required'
        ]);

        ContactModel::create($request->all());
        return redirect()->route('contact.index')->with('success', 'Contact created successfully');
    }

    public function show($id){
      $contact = ContactModel::find($id);
      return view('contact.detail', compact('contact'));
    }

    public function edit($id){
      $contact = ContactModel::find($id);
      return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id){
      $this->validate($request, [
        'uname' => 'required',
        'fullname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required'
        ]);

        ContactModel::find($id)->update($request->all());
        return redirect()->route('contact.index')->with('success', 'Contact updated successfully');
    }

    public function destroy($id){
      ContactModel::find($id)->delete();
      return redirect()->route('contact.index')->with('success', 'Contact deleted successfully');
    }
}
