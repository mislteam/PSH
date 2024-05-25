<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;

class ProjectCategoryController extends ResponseController
{
     //projectcategory index page
     public function index(Request $request)
     {
         $projectcatname = $request->query('name');
         $sessionArray = [
             'name' => $projectcatname,
         ];
         session()->put('filter', $sessionArray);
         $query = ProjectCategory::paginate(10);
 
         if ($projectcatname) {
             // $query->whereHas('user', function($q) use ($productname) { 
             $query->where('name', 'like', '%' . $projectcatname . '%');
             // });
         }
 
         $projectcategory = $query;
         return view('backend.projectcategory.projectcategory', compact('projectcategory'));
     }
 
     // projectcategory create page
     public function create()
     {
         return view('backend.projectcategory.projectcategory-create');
     }
 
     // projectcategory store method
     public function store(Request $request)
     {
         ProjectCategory::create([
             'name' => $request->project_cat_name,
         ]);
 
         return redirect()->route('project-category.index')->with('message', 'Prodject-category created successfully');
     }
 
     // projectcategory edit page
     public function edit($id)
     {
         $projectcategory = ProjectCategory::find($id);
         return view('backend.projectcategory.projectcategory-edit', compact('projectcategory'));
     }
 
     // projectcategory update method
     public function update(Request $request, $id)
     {
         $projectcategory = [
             'id' => $id,
             'name' => $request->project_cat_name,
         ];
 
         ProjectCategory::where('id', $id)->update($projectcategory);
         return redirect()->route('project-category.index')->with('message', 'Project-category updated successfully');
     }
 
     // projectcategory delete method
     public function delete(Request $request)
     {
         $projectcategory = ProjectCategory::find($request->id);
 
         if ($projectcategory) {
             $projectcategory->delete();
             return $this->successMessage('message', 'Project-Category Deleted Successfully');
         } else {
             return $this->errorMessage();
         }
     }
}
