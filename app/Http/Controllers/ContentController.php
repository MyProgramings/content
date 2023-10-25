<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Content::get();
        return view('links', compact('contents'));
        // return view('dashboard',[
        //     'contents' => Content::query()
        //     ->when(request('search'), function ($query) {
        //         $query->search(request('search'));
        //     })->latest()->get(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createLink');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create_W_User($id)
     {
         $data = [
             'users' => User::where('id', $id)->get(),
         ];
         return view('createLink')->with($data);
     }

    public function store(Request $request)
    {
        Content::create([
            'title'            => $request->title,
            'link'       => $request->link,
            'description'       => $request->description,
            'user_id'       => $request->user_id,
        ]);
        return redirect(Route('user.index'));
    }



    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Content::destroy($id);
        return redirect(Route('content.index'));
    }
}
