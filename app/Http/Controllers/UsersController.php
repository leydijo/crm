<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\NewUser;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        // dd('index');

         $users = DB::table('new_user')->paginate(2);
        // Paginator::defaultView('users.index');
        // return view('users.index', ['users' => $users]);
        
        return view('users.index')->with('users', $users );
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
      $newuser= NewUser::create($request->all());
        //dd($request->all());
        flash('Se ha registrado el  ' . $newuser->name. " corectamente" )->success();
            return redirect(action('UsersController@index'));
           
           // return redirect(action('RegisterUsersController@create'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = NewUser::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = NewUser::find($id);
        $user->update($request->all());
        $user->identification = $request->identification;
        $user->fullname = $request->fullname;
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        flash('El usuario  ' . $user->name. "  ha sido actualizado correctamente" )->warning();
        $user->save();

       return redirect(action('UsersController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
