<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Library\Response\Status;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function fetch (Request $request) {
        try {
            $query = Project::query();

            $query->when($request->limit, function($q, $limit){
                return $q->limit($limit);
            });

            $query->latest();

            $projects = $request->limit ? $query->get() : $query->paginate(4);
        } catch (Exception $e) {
            return Status::error($e->getCode(), $e->getMessage());
        }

        return Status::success("Projects", [
            'projects' => $projects
        ]);
    }

    function single($slug) {
        try {
            $project = Project::where('slug', $slug)->first();
        } catch (Exception $e) {
            return Status::error($e->getCode(), $e->getMessage());
        }

        return Status::success("Post", [
            'project' => $project
        ]);
    }
}
