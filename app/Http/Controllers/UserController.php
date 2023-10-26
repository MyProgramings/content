<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsersRequest;
use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public $user;
    public $content;
    public function __construct(User $user, Content $content)
    {
        $this->user = $user;
        $this->content = $content;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard',[
            'users' => $this->user::query()
            ->when(request('search'), function ($query) {
                $query->search(request('search'));
            })->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsersRequest $request)
    {
        $this->user::create([
            'name'            => $request->name,
            'email'       => $request->email,
            'code'       => $request->code,
            'location'       => $request->location,
            'section'       => $request->section,
            'password'       => Hash::make($request->password),
        ]);
        return redirect(Route('user.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $profile = $this->user::where('id', $id)->first();
        $contents = $this->content::where('user_id', $id)->get();
        return view('profile', compact('profile', 'contents'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = $this->user::findorFail($id);
        return view('editUser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect(Route('user.index'));
    }
}
