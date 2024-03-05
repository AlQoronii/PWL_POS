<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function index(){
        // $user = UserModel::all();
        // return view('user', ['data'=> $user]);
        // $data =[
        //     'username' => 'customer-1',
        //     'nama'  => 'Pelanggan',
        //     'Password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data);
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);


        // $data =[
        //     'nama'=> 'Pelanggan Pertama',
        // ];
        // UserModel::where('username','customer-1')->update($data);

        // $user = UserModel::all();
        // return view('user',['data' => $user]);
            
        // $data =[
        //     'level_id'=>2,
        //     'username'=>'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')  
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user',['data'=>$user]);

        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id',1)->first();
        // return view('user', ['data'=>$user]);

        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data'=>$user]);

        // $user = UserModel::findOr(1,['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data'=>$user]);
        
        // $user = UserModel::findOr(20,['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data'=>$user]);
        
        // $user = UserModel::findOrFail(1);
        // // return view('user',['data' => $user]);
        // $user = UserModel::where('username','manager9')->firstOrFail();
        // return view('user', ['data'=>$user]);
            
        //Praktikum 2.3
        // $user = UserModel::where('level_id',2)->count();
        // // dd($user);
        // return view('user', ['data' => $user]);

        //Praktikum 2.4
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username'=> 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        
        // return view('user',['data'=>$user]);

        //Langkah 4
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id'=>2
        //     ],
        // );

        // return view('user',['data' => $user]);
        
        //langkah 
        // $user = UserModel::firstOrNew(
        //     [
        //         'username'=> 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        // return view('user',['data'=>$user]);
       
        //Langkah
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );

        // return view('user', ['data' => $user]);

        //Praktikum 2.5 
        //Langkah 1
        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager55';

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama','username']);

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama','username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());


        //Langkah 3
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['usename', 'level_id']);
        $user->wasChanged('nama');
        dd($user->wasChanged(['nama','username']));

    }
}
