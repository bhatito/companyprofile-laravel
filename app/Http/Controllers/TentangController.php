<?php
  
namespace App\Http\Controllers;
  
use App\Models\Tentang;
use Illuminate\Http\Request;
  
class TentangController extends Controller
{

    public function index()
    {
        $tentangs = Tentang::latest()->paginate(5);
      
        return view('tentang.index',compact('tentangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('tentang.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            // 'kelas' => 'required',
        ]);
      
        Tentang::create($request->all());
       
        return redirect()->route('tentang.index')
                        ->with('success','Student created successfully.');
    }
  
    public function show(Tentang $tentang)
    {
        return view('tentang.show',compact('tentang'));
    }
  
    public function edit(Tentang $tentang)
    {
        return view('tentang.edit',compact('tentang'));
    }

    public function update(Request $request, Tentang $tentang)
    {
        $request->validate([
            'deskripsi' => 'required',
            // 'kelas' => 'required',
        ]);
      
        $tentang->update($request->all());
      
        return redirect()->route('tentang.index')
                        ->with('success','Tentang updated successfully');
    }

    public function destroy(Tentang $tentang)
    {
        $tentang->delete();
       
        return redirect()->route('tentang.index')
                        ->with('success','Tentang deleted successfully');
    }
}