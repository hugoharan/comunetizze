<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all()->take(7);
        return view('home')->with('users',$data);
    }

    public function firstAccess()
    {
        return view('first-access');
    }

    public function profile()
    {
        return view('profile');
    }

    public function editProfile(Request $request){
        
        $user = User::find(Auth::user()->id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->telefone = $request->get('telefone');
        $user->tipo = $request->get('tipo');
        
        $user->save();

        return redirect()->back()->with('sucesso', "Editado com sucesso");
    
    }

    public function afiliados()
    {
        $data = User::all()->take(7);
        return view('afiliados')->with('users',$data);
    }

    public function fit()
    {
        $data = User::all()->take(6);
        return view('fit')->with('users',$data);
    }

    public function solicitacoes()
    {
        return view('solicitacoes');
    }

    public function grupos()
    {
        return view('grupos');
    }

    public function configuracoes()
    {
        return view('configuracoes');
    }
}
