<?php namespace Bantenprov\ProfilBpjs\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\ProfilBpjs\Facades\ProfilBpjs;
use Bantenprov\ProfilBpjs\Models\ProfilBpjsModel;
use App\User;
use Validator;

/**
 * The ProfilBpjsController class.
 *
 * @package Bantenprov\ProfilBpjs
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilBpjsController extends Controller
{
    
    public function index(Request $request)
	{

        if($request->get('search') != ''){
            $profils = ProfilBpjsModel::where('no_bpjs','like','%'.$request->get('search').'%')->paginate(10);
            return view('profil-bpjs::index',compact('profils'));
        }else{
            $profils = ProfilBpjsModel::paginate(10);
            return view('profil-bpjs::index',compact('profils'));
        }

	}

	 public function create()
    {
    	$users = User::all();
        return view('profil-bpjs::create',compact('users'));
    }

    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(),[ 
    		'user_id' => 'required|unique:profil_bpjs,user_id',
    		'no_bpjs' => 'required', 
    		'faskes' => 'required', 
    		'kelas_rawat' => 'required', 
     
    	]); 
    	if($validator->fails()){ 
    		return redirect()->back()->withErrors($validator)->withInput();
        }

        ProfilBpjsModel::create($request->all());
        return redirect()->back()->with('message','add success');
    }

    public function show($id)
    {
        $profil = ProfilBpjsModel::find($id);
        return view('profil-bpjs::show',compact('profil'));
    }

    public function edit($id)
    {
    	$users = User::all();
        $profil = ProfilBpjsModel::find($id);
        return view('profil-bpjs::edit',compact('profil','users'));
    }

     public function update(Request $request, $id)
    {	


    	$validator = Validator::make($request->all(),[ 
    		'user_id' => 'required',
    		'no_bpjs' => 'required', 
    		'faskes' => 'required', 
    		'kelas_rawat' => 'required',
    		
    	]); 
    	if($validator->fails()){ 
    		return redirect()->back()->withErrors($validator)->withInput();
    	}

         ProfilBpjsModel::where('id',$id)->update([
            "user_id" => $request->user_id,
            "no_bpjs" => $request->no_bpjs,
            "faskes" => $request->faskes,
            "kelas_rawat" => $request->kelas_rawat,
        ]);
        return redirect()->back()->with('message','update success');
    }

    public function destroy($id)
    {
        ProfilBpjsModel::find($id)->delete();

        return redirect()->back();
    }
}
