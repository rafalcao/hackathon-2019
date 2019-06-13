<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProjectsController extends BaseController
{
    function index(){
        return view('projects.index');
    }

    public function create() {
        return view('projects.create');
    }

    public function edit(Project $project) {
        $this->authorize('edit', $project);
        return view('project.edit', compact('project'));
    }

    public function store(Request $request) {
        /* $request->validate($this->validationRules());
        $earning = new Earning;
        if(!empty(session('space'))){
            $space = (array) session('space');
        }
        $earning->space_id = $space['id'];
        $earning->happened_on = $request->input('date');
        $earning->description = $request->input('description');
        $earning->amount = (int) ($request->input('amount') * 100);
        $earning->save();
        return redirect()->route('dashboard'); */
    }

    public function cancel(Project $project) {
        /*
        $this->authorize('delete', $earning);
        $restorableEarning = $earning->id;
        $earning->delete();
        return redirect()
            ->route('earnings.index')
            ->with([
                'restorableEarning' => $restorableEarning
            ]);
        */
    }
}
