<?php

namespace App\Http\Controllers\Backend;

use App\Models\NewCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;

class NewCategoryController extends ResponseController
{
    //new category index page
    public function index()
    {
        $newcategory = NewCategory::paginate(10);
        return view('backend.newcategory.newcategory', compact('newcategory'));
    }

    // new category create page
    public function create()
    {
        return view('backend.newcategory.newcategory-create');
    }

    // new category store method
    public function store(Request $request)
    {
        NewCategory::create([
            'name' => $request->new_cat_name,
        ]);

        return redirect()->route('new-category.index')->with('message', 'New-category created successfully');
    }

    // new category edit page
    public function edit($id)
    {
        $newcategory = NewCategory::find($id);
        return view('backend.newcategory.newcategory-edit', compact('newcategory'));
    }

    // projectcategory update method
    public function update(Request $request, $id)
    {
        $newcategory = [
            'id' => $id,
            'name' => $request->new_cat_name,
        ];

        NewCategory::where('id', $id)->update($newcategory);
        return redirect()->route('new-category.index')->with('message', 'New-category updated successfully');;
    }

     // projectcategory delete method
     public function delete(Request $request)
     {
         $newcategory = NewCategory::find($request->id);
 
         if ($newcategory) {
             $newcategory->delete();
             return $this->successMessage('message', 'New-Category Deleted Successfully');
         } else {
             return $this->errorMessage();
         }
     }
}
