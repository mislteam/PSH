<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ProjectSubCategory;
use App\Http\Controllers\ResponseController;
use App\Models\ProjectCategory;

class ProjectSubCategoryController extends ResponseController
{
    //project sub category 
    public function index()
    {
        $projectsubcategory = ProjectSubCategory::paginate(10);
        $projectcategory = ProjectCategory::all();
        return view('backend.projectsubcategory.projectsubcategory', compact('projectsubcategory', 'projectcategory'));
    }

    //project sub category create
    public function create()
    {
        $projectsubcategory = ProjectSubCategory::all();
        $projectcategory = ProjectCategory::select('id', 'name')->get();
        return view('backend.projectsubcategory.projectsubcategory-create', compact('projectsubcategory', 'projectcategory'));
    }

    //project sub category create
    public function store(Request $request)
    {
        ProjectSubCategory::create([
            'name' => $request->project_sub_cat_name,
            'project_category_id' => intval($request->project_cat_id),
        ]);
        return redirect()->route('project-sub-category.index')->with('message', 'Project SubCategory created successfully');
    }

    //project sub category edit
    public function edit($id)
    {
        $projectsubcategory = ProjectSubCategory::find($id);
        $projectcategory = ProjectCategory::select('id', 'name')->get();
        return view('backend.projectsubcategory.projectsubcategory-edit', compact('projectsubcategory', 'projectcategory'));
    }

    // projectsubcategory update method
    public function update(Request $request, $id)
    {
        $projectsubcategory = [
            'id' => $id,
            'name' => $request->project_sub_cat_name,
            'project_category_id' => $request->project_cat_id,
        ];

        ProjectSubCategory::where('id', $id)->update($projectsubcategory);
        return redirect()->route('project-sub-category.index')->with('message', 'Project Sub Category updated successfully');;
    }

    // project subcategory delete method
    public function delete(Request $request)
    {
        $projectsubcategory = ProjectSubCategory::find($request->id);
        if ($projectsubcategory) {
            $projectsubcategory->delete();
            return $this->successMessage('message', 'Project-Sub-Category Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
