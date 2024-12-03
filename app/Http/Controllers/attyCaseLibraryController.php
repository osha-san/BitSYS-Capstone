<?php


namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\attyCaseLibrary;
use Illuminate\Http\Request;


//
class attyCaseLibraryController extends Controller
{
    public function index()
    {
        $cases = attyCaseLibrary::all();
        return view('case-libraries.index', compact('cases'));
    }

    public function create()
    {
        return view('case-libraries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'case_name' => 'required',
            'case_description' => 'nullable',
            'document_url' => 'required|url',
        ]);

        attyCaseLibrary::create($request->all());
        return redirect()->route('case-libraries.index');
    }

    public function edit(attyCaseLibrary $caseLibrary)
    {
        return view('case-libraries.edit', compact('caseLibrary'));
    }

    public function update(Request $request, attyCaseLibrary $caseLibrary)
    {
        $request->validate([
            'case_name' => 'required',
            'case_description' => 'nullable',
            'document_url' => 'required|url',
        ]);

        $caseLibrary->update($request->all());
        return redirect()->route('case-libraries.index');
    }

    public function destroy(attyCaseLibrary $caseLibrary)
    {
        $caseLibrary->delete();
        return redirect()->route('case-libraries.index');
    }
}
