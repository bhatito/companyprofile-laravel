<?php
  
namespace App\Http\Controllers;
  
use App\Models\Contact;
use Illuminate\Http\Request;
  
class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
      
        // dd($contacts);
        return view('contact.index',compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('contact.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            // 'kelas' => 'required',
        ]);
      
        Contact::create($request->all());
       
        return redirect()->route('contact.index')
                        ->with('success','Student created successfully.');
    }
  
    public function show(Contact $contact)
    {
        return view('contact.show',compact('contact'));
    }
  
    public function edit(Contact $contact)
    {
        return view('contact.edit',compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'deskripsi' => 'required',
            // 'kelas' => 'required',
        ]);
      
        $contact->update($request->all());
      
        return redirect()->route('contact.index')
                        ->with('success','contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
       
        return redirect()->route('contact.index')
                        ->with('success','contact deleted successfully');
    }
}