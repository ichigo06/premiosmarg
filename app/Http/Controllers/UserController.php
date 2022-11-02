<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Consumer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Spatie\Permission\Models\Role;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::with('consumers')->orderBy('id' , 'DESC')->get();
        $users = User::with('consumers')->orderBy('id' , 'DESC')->get();
        return view('admin.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, User $users)
    { 
        $users->roles()->sync($request->roles);
        $consumers = Consumer::all();
        $roles = Role::all();
        return view('admin.users.create', compact('roles' , 'consumers'));
        // return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datesClient = request()->all();

        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'whatsapp' => 'required|int',
            'dni' => 'required|int',
            'tel' => 'required|int',
            'id_consumers' => 'required ',
            'email_verified_at' => '',
        ]);

        $datesClient = request()->except('_token');
        
        $datesClient['password'] = bcrypt($request->password);
        
        User::created($datesClient);
       
        User::insert($datesClient);


        return redirect('users');
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
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit' , compact('user' ,'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
      
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index', $user) -> with('info', 'Se asigno los roles correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin.users');
    }
}
