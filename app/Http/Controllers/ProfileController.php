<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $profiles = Profile::all();


        return view('site.index', compact('user', 'profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($userId)
    {
        // $user = User::findOrFail($userId);
        // return view('profile.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile();

        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->gender = $request->gender;
        $profile->birthdate = $request->birthdate;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->user_id = $request->user_id;

        // Image Upload
        if($request->hasFile('picture') && $request->file('picture')->isValid()){
            $requestImage = $request->picture;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

           $requestImage->move(public_path('img/profile'), $imageName);



           $profile->picture = $imageName;

        }

        $profile->save();

        return redirect('/')->with('msg', 'Perfil criado com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        $profile = Profile::where('user_id', $id)->first();


        return view('profile.show', compact('profile', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $profile = Profile::where('user_id', $id)->first();

        return view('profile.edit', compact('profile','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();


        // Image Upload
        if($request->hasFile('picture') && $request->file('picture')->isValid()){
            $requestImage = $request->picture;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

           $requestImage->move(public_path('img/profile'), $imageName);



           $data['picture'] = $imageName;

        }

        Profile::findOrFail($id)->update($data);

        return redirect()->back()->with('msg', 'Perfil alterado com sucesso');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
