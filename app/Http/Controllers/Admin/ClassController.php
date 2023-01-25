<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

use function Pest\Laravel\get;

class ClassController extends Controller
{
    //__construct
    public function __construct()
    {
        $this->middleware('auth');   
    }

    //Index method of all databeses
    public function index()
    {
        $class= DB::table('classes')->get();
        return view('admin.classes.index', compact('class'));
    }

    //create form page
    public function create()
    {
        return view('admin.classes.create');
    }

    //store class//
    public function store(Request $request)
    {
        $request->validate([
            'class_name'=>'required|unique:classes',
        ]);
        $data = array(
            'class_name' =>$request->class_name,
        );
        DB::table('classes')->insert($data);
        return redirect()->back()->with('success', 'Successfully Inserted');
    }

    //delete method
    public function delete($id)
    {
        DB::table('classes')->Where('id', $id)->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }
}
