<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Subcategory;
use App\Models\Category;
use DataTables;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //index method for read data
    public function index(Request $request)
    {
    	     //Eloquent ORM
             if ($request->ajax()) {
                $data=DB::table('subcategories')->leftJoin('categories','subcategories.category_id','categories.id')
                ->select('subcategories.*','categories.category_name')->get();
    
                return DataTables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
    
                            $actionbtn='<a href="#" class="btn btn-info btn-sm edit" data-id="'.$row->id.'" data-toggle="modal" data-target="#editModal" ><i class="fas fa-edit"></i></a>
                              <a href="'.route('subcategory.delete',[$row->id]).'" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i>
                              </a>';
    
                           return $actionbtn; 	
    
                        })
                        ->rawColumns(['action'])
                        ->make(true);		
            }
         
    	$sub_cat=Subcategory::all();
    	$category=Category::all();  
    	 return view('back.category.subcategory.index',compact('sub_cat','category'));     
    }
    //store method
    public function store(Request $request)
    {
    	//$validated = $request->validate([
          // 'subcategory_name' => 'required|max:55',
       //]);

    	 $data=array();
    	 $data['category_id']=$request->category_id;
    	 $data['subcategory_name']=$request->subcategory_name;
    	 $data['subcat_slug']=Str::slug($request->subcategory_name, '-');

    	 DB::table('subcategories')->insert($data);

    	//Eloquent ORM
        //$slug=Str::slug($request->subcategory_name, '-');

    	//Subcategory::insert([
    	//	'category_id'=> $request->category_id,
    	//	'subcategory_name'=> $request->subcategory_name,
    	//	'subcat_slug'=> $slug,
    	//]);


    	$notification=array('messege' => 'Subcategory Inserted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }
     //edit subcategory
     public function edit($id)
     {
             // Eloquent ORM
         // $data=Subcategory::find($id);
         // $category=Category::all();
             //Query Builder
         $data=Subcategory::find($id);
         $category=DB::table('categories')->get();
 
         return view('back.category.subcategory.edit',compact('data','category'));
     }
 
     //update method
     public function update(Request $request)
     {
        //Eloquent ORM
        $subcategory=Subcategory::where('id',$request->id)->first();
        $subcategory->update([
                'category_id'=> $request->category_id,
             'subcategory_name'=> $request->subcategory_name,
             'subcat_slug'=> Str::slug($request->subcategory_name, '-')
        ]);
        $notification=array('messege' => 'Subategory Updated!', 'alert-type' => 'success');
         return redirect()->back()->with($notification);
     }
 
    //destroy subcategory
    public function destroy($id)
    {
    	$subcat=Subcategory::find($id);
    	$subcat->delete();
    	$notification=array('messege' => 'Subategory Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);

    }
}
