<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;
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

    /**
     * @param $request
     */
    protected function _saveProjects($request) {
        $projects = new Projects;
        $projects->id = null;
        $projects->owner_user_id = 1;
        $projects->zone_id = 1;
        $projects->name = $request->projectname;
        $projects->description = $request->description;
        $projects->required_skills = serialize($request->skill);
        $projects->save();

        return $projects;

    }

    /**
     * @param $request
     */
    protected function _savePhases($request) {
        $phases = new Phases;
        $phases->id = null;
        $projects->owner_user_id = 1;
        $projects->zone_id = 1;
        $projects->name = $request->projectname;
        $projects->description = $request->description;
        $projects->required_skills = serialize($request->skill);
        $projects->save();

        return $projects;

    }

    /**
     * @param $request
     */
    protected function _saveZone($request) {


        $projects = new Projects;
        $projects->id = null;
        $projects->owner_user_id = 1;
        $projects->zone_id = 1;
        $projects->name = $request->projectname;
        $projects->description = $request->description;
        $projects->required_skills = serialize($request->skill);
        $projects->save();

        return $projects;

    }

    public function store(Request $request) {

        $project = $this->_saveProjects($request);
        $phases = $this->_savePhases($request, $project);
        $this->_saveZone($request);


        return view('projects.create');
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
