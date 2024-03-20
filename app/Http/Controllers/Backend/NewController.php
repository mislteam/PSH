<?php

namespace App\Http\Controllers\Backend;

use App\Models\News;
use App\Models\NewCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;

class NewController extends ResponseController
{
    //new index page
    public function index()
    {
        $news = News::paginate(10);
        return view('backend.news.news', compact('news'));
    }

    //project create page
    public function create()
    {
        $newcat = NewCategory::all();
        $news = News::select('id', 'name')->get();
        return view('backend.news.news-create', compact('newcat', 'news'));
    }

    // News store method
    public function store(Request $request)
    {
        $imagefileName = uniqid() . $request->file('feature_image')->getClientOriginalName();
        $request->file('feature_image')->storeAs('public/new_feature_image/', $imagefileName);
        $data['feature_image'] = $imagefileName;

        News::create([
            'name' => $request->new_name,
            'new_category_id' => intval($request->new_category_id),
            'description' => $request->new_description,
            'feature_image' => $imagefileName,
        ]);
        return redirect()->route('news.index')->with('message', 'News created successfully');
    }

    //project edit page
    public function edit($id)
    {
        $newcat = NewCategory::select('id', 'name')->get();
        $new = News::find($id);
        return view('backend.news.news-edit', compact('new', 'newcat'));
    }

    // project update method
    public function update(Request $request, $id)
    {
        $news = [
            'name' => $request->new_name,
            'new_category_id' => intval($request->new_category_id),
            'description' => $request->new_description,
        ];

        // Check if feature image is provided in the request
        if ($request->hasFile('feature_image')) {
            $imagefileName = uniqid() . $request->file('feature_image')->getClientOriginalName();
            $request->file('feature_image')->storeAs('public/new_feature_image/', $imagefileName);
            $news['feature_image'] = $imagefileName;
        }

        // Update the product in the database
        News::where('id', $id)->update($news);

        // Redirect back to the product index page with a success message
        return redirect()->route('news.index')->with('message', 'News updated successfully');
    }

    //   news delete method
    public function delete(Request $request)
    {
        $news = News::find($request->id);
        if ($news) {
            $news->delete();
            return $this->successMessage('message', 'News Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
