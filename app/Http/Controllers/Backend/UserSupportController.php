<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\UserSupport;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use Database\Seeders\UserSeeder;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;

class UserSupportController extends ResponseController
{
    //user support index page
    public function index()
    {
        $usersupp = UserSupport::paginate(10);
        return view('backend.usersupport.usersupport', compact('usersupp'));
    }

    //user support create page
    public function create()
    {
        $product = Product::all();
        $usersupp = UserSupport::select('id', 'name')->get();
        return view('backend.usersupport.usersupport-create', compact('usersupp', 'product'));
    }

    // user support store method
    public function store(Request $request)
    {
        $usersupp = UserSupport::create([
            'name' => $request->usersupp_name,
            'product_id' => $request->product_id,
            'description' => $request->usersupp_des
        ]);
        return redirect()->route('usersupport.index')->with('message', 'User Support created successfully');
    }

    // User support edit page
    public function edit($id)
    {
        $product = Product::select('id', 'name')->get();
        $usersupp = UserSupport::find($id);
        // dd($product);
        return view('backend.usersupport.usersupport-edit', compact('product', 'usersupp'));
    }

    // User support update method
    public function update(Request $request, $id)
    {
        $usersupp = [
            'id' => $id,
            'name' => $request->usersupp_name,
            'product_id' => $request->product_id,
            'description' => $request->usersupp_des,
        ];

        UserSupport::where('id', $id)->update($usersupp);
        return redirect()->route('usersupport.index')->with('message', 'User Support updated successfully');
    }

    //   user support delete method
    public function delete(Request $request)
    {
        $usersupp = UserSupport::find($request->id);

        if ($usersupp) {
            $usersupp->delete();
            return $this->successMessage('message', 'User Support Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
