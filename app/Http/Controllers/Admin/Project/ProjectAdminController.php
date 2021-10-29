<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Library\Files\FileHandler;
use App\Http\Library\Response\Status;
use App\Http\Library\Tokenize\Token;
use App\Http\Requests\Admin\Project\CreateProjectRequest;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    function fetchProjects(){
        return view('admin.projects.projects');
    }

    function fetchSingleProject(){
        return view('admin.projects.project-details');
    }

    function createProject(CreateProjectRequest $request){
        try {
            $unique_id = Token::unique('projects');

            $images = $request->hasFile('images') ? FileHandler::handleFiles($request->file('images')) : [];

            $validated = $request->validated();

            Project::create(array_merge($validated, [
                'unique_id' => $unique_id,
                'images' => serialize($images)
                ]
            ));
        } catch (Exception $e) {
            return Status::redirect('error', $e->getMessage());
        }

        return Status::redirect('success', "Project Added to Portfolio");
    }

    function updateProject(){

    }

    function deleteProject($id){
        try {
            Project::find($id)->delete();
        } catch (Exception $e) {
            return Status::redirect('error', $e->getMessage());
        }
        return Status::redirect('success', "Project Deleted");
    }

    function suspendProject($id){
        try {
            $project = Project::find($id);
            $project->status = !$project->status;
            $project->save();
        } catch (Exception $e) {
            return Status::redirect('error', $e->getMessage());
        }
        return Status::redirect('success', "Project Suspended");
    }
}
