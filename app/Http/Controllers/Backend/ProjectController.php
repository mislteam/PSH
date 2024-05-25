<?php

namespace App\Http\Controllers\Backend;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Models\ProjectSubCategory;
use App\Http\Controllers\ResponseController;

class ProjectController extends ResponseController
{
    //index page
    public function index()
    {
        $project = Project::paginate(10);
        return view('backend.project.project', compact('project'));
    }

    //project create page
    public function create()
    {
        $procat = ProjectCategory::all();
        $prosubcat = ProjectSubCategory::all();
        $project = Project::select('id', 'name')->get();
        return view('backend.project.project-create', compact('project', 'procat','prosubcat'));
    }

    // project store method
    public function store(Request $request)
    {
        
        $imagefileName = uniqid() . $request->file('feature_image')->getClientOriginalName();
        $request->file('feature_image')->storeAs('public/project_feature_image/', $imagefileName);
        $data['feature_image'] = $imagefileName;

        $galleryImages = [];
        foreach ($request->file('gallery_image') as $image) {
            $filename = uniqid('gallery_image_') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/gallery_image/', $filename);
            $galleryImages[] = $filename;
        }


        $project = Project::create([
            'name' => $request->project_name,
            'project_category_id' => intval($request->project_category_id),
            'project_sub_category_id' => intval($request->project_sub_category_id),
            'description' => $request->project_description,
            'feature_image' => $imagefileName,
            'gallery_image' =>  json_encode($galleryImages),
        ]);
        // dd($project);
        return redirect()->route('project.index')->with('message', 'Project created successfully');
    }

    //project edit page
    public function edit($id)
    {
        $procat = ProjectCategory::select('id', 'name')->get();
        $prosubcat = ProjectSubCategory::select('id', 'name')->get();
        $project = Project::find($id);
        // dd($project);
        return view('backend.project.project-edit', compact('project', 'procat','prosubcat'));
    }

    // project update method
    public function update(Request $request, $id)
    {
        $project = [
            'name' => $request->project_name,
            'project_category_id' => intval($request->project_category_id),
            'project_sub_category_id' => intval($request->project_sub_category_id),
            'description' => $request->project_description,
        ];

        // Check if feature image is provided in the request
        if ($request->hasFile('feature_image')) {
            $imagefileName = uniqid() . $request->file('feature_image')->getClientOriginalName();
            $request->file('feature_image')->storeAs('public/project_feature_image/', $imagefileName);
            $project['feature_image'] = $imagefileName;
        }

        // Check if gallery images are provided in the request
        if ($request->hasFile('gallery_image')) {
            $galleryImages = [];
            foreach ($request->file('gallery_image') as $image) {
                $filename = uniqid('gallery_image_') . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/gallery_image/', $filename);
                $galleryImages[] = $filename;
            }
            $project['gallery_image'] = json_encode($galleryImages);
        }

        // Update the product in the database
        Project::where('id', $id)->update($project);

        // Redirect back to the product index page with a success message
        return redirect()->route('project.index')->with('message', 'Project updated successfully');
    }


    //   project delete method
    public function delete(Request $request)
    {
        $project = Project::find($request->id);
        if ($project) {
            $project->delete();
            return $this->successMessage('message', 'Project Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
