<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Project;

class ProjectController
{
    
    public function getAllProjects(){
        $projects = Project::where('is_active', 1)
                ->orderBy('name', 'asc')
                ->take(2)
                ->get()
                ->firstOrFail();
        return $projects;
    }

    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();
    
        return "Guardado";
    }

    public function updateProject() {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();
    
        return "Actualizado";
    }

    public function deleteProject() {
        $project = Project::where('project_id', '>', 15)->delete();
        return "Registros eliminados";
    }
}