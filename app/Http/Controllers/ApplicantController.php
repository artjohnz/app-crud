<?php
namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller {
    // List all applicants
    public function index() {
        $applicants = Applicant::all();
        return view('applicants.index', compact('applicants'));
    }

    // Show create form
    public function create() {
        return view('applicants.create');
    }

    // Store applicant
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:applicants',
            'phone' => 'required',
            'status' => 'required',
        ]);
    
        Applicant::create($request->all());
    
        // Redirect to the store view instead of the index
        return redirect()->route('applicants.store')->with('success', 'Applicant added successfully!');
    }

    // Show edit form
    public function edit($id) {
        $applicant = Applicant::findOrFail($id);
        return view('applicants.edit', compact('applicant'));
    }

    // Update applicant
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'status' => 'required',
        ]);

        $applicant = Applicant::findOrFail($id);
        $applicant->update($request->all());

        return redirect()->route('applicants.index')->with('success', 'Applicant updated successfully!');
    }

    // Delete applicant
    public function destroy($id) {
        Applicant::findOrFail($id)->delete();
        return redirect()->route('applicants.index')->with('success', 'Applicant deleted successfully!');
    }
}
