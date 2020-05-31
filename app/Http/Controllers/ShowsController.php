<?php

namespace App\Http\Controllers;

use App\Shows;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Auth;

class ShowsController extends Controller
{
    public function index()
     {

        $products = Shows::all();

        return view('admin.shows.index', compact('products'));
    }

    public function create() {

        $products = new Shows();
        return view('admin.shows.create', compact('products'));
    }

    public function store(Request $request)
     {
     
        // Validate the form
        $request->validate([
         'name' => 'required',
            'category' =>'required',
            'url' => 'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);

        // Upload the image
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());
        }

        // Save the data into database
        Shows::create([
            'name' => $request->name,
            'category'=> $request->category,
            'url' => $request->url,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName()

        ]);

        // Sessions Message
        $request->session()->flash('msg','Show has been added');

        // Redirect

        return redirect('admin/show');

    }

    public function edit($id)
     {
        
        $products = Shows::find($id);
        return view('admin.shows.edit', compact('products'));
    }

    public function update(Request $request, $id) 
    {

        // Find the shows
        $product = Shows::find($id);

        // Validate The form
        $request->validate([
            'name' => 'required',
            'category' =>'required',
             'url' => 'required',
             'description' => 'required',
             'image' => 'image|required'
        ]);

        // Check if there is any image
        if ($request->hasFile('image')) {
            // Check if the old image exists inside folder
            if (file_exists(public_path('uploads/') . $product->image)) {
                unlink(public_path('uploads/') . $product->image);
            }

            // Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $product->image = $request->image->getClientOriginalName();
        }

        // Updating shows
        $product->update([
           'name' => $request->name,
           'category' => $request->category,
            'url' => $request->url,
            'description' => $request->description,
            'image' => $product->image
        ]);

        // Store a message in session
        $request->session()->flash('msg', 'Show has been updated');

        // Redirect
        return redirect('admin/show');

    }

    public function show($id) 
    {
        $product = Shows::find($id);
        return view('admin.shows.details', compact('product'));
    }

    public function destroy($id)
     {
        // Delete shows
        Shows::destroy($id);

        // Store a message
        session()->flash('msg','Show has been deleted');

        // Redirect back
        return redirect('admin/show');

    }

    //Api to show listing 

   public function showList(Request $request )
   {
    $result  = Shows::select('id','name','category','url','description','created_at')->get();

    if($result) {
        return ResponseController::sendAjaxResponse('true', [
            'data' => $result
        ] , 200);
    }

     
   }


   
}