<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

class KaryawanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =User::all();
        if (Auth::user()->jabatan == 'Super Admin') {
            return view('karyawan',['data'=> $data]); 
        }else{
            abort(404, 'The resource you are looking for could not be found');
        }
           
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'username'=> 'required|unique:users',
    //         'email' => 'required|email|max:255|unique:users',
    //         'jabatan' => 'required',
    //         'password' => 'required|min:6|confirmed',

    //     ]);
    // }
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */

    protected function create()
    {
        // User::create([
        //     'name' => $data['name'],
        //     'username'=>$data['username'],
        //     'email' => $data['email'],
        //     'jabatan' => $data['jabatan'],
        //     'password' => bcrypt($data['password']),
        // ]);

        return view('tambahkaryawan');
    }

 protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'username'=> 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'jabatan' => 'required',
            'password' => 'required|min:6|confirmed',

        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use RegistersUsers;
    public function store(Request $request)
    {
        $users = new User;
        $users->name     =$request->name;
        $users->email    =$request->email;
        $users->username =$request->username;
        $users->jabatan  =$request->jabatan;
        $users->password =$request->password;
        $users->save();
        return redirect('/admin/karyawan')->with('message', 'Data berhasil ditambahkan!');

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
    
        $users = user::findOrFail($id);
        return view('editkaryawan', compact('users'));
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
        $users = User::findOrFail($id);
        
        $users->name     =$request->name;
        $users->email    =$request->email;
        $users->username =$request->username;
        $users->jabatan  =$request->jabatan;
        $users->password =$request->password;
        $users->save();
        return redirect('/admin/karyawan')->with('message', 'Data berhasil di update!');
        
       

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users= USer::find($id)->delete();
          return redirect('/admin/karyawan')->with('message', 'Data berhasil di hapus!');

    
    }
}
