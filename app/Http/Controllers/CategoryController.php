<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\createCategoryRequest;
use Carbon\Carbon;
use Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'ASC')->where('deleted', 0)->get();
        return view('admin.category.index', compact(['categories']));
    }

    public function trash()
    {
        $categories = Category::orderBy('id', 'ASC')->where('deleted', 1)->get();
        return view('admin.category.trash', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createCategoryRequest $request)
    {

        //Add new Category
        $category = new Category;
        $category->fill($request->all());
        $category->slug = Str::slug($category->name, '-').'-'.Str::random(10);

        //Save Category's thumbnail
        $get_image = $request->thumbnail;
        if($get_image)
        {
            $path = 'img/categories/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.'-'.Str::random(10).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $category->thumbnail = $new_image;
        }

        $category->save();

        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Validate

        //Update category
        $category = Category::findOrFail($id);
        $category->fill($request->all());

        //Save category's thumbnail 
        $get_image = $request->thumbnail;

        if($get_image)
        {
            //Delete old Image
            $path_unlink = 'img/categories/'.$category->thumbnail;
            if(file_exists($path_unlink) && $path_unlink !== 'img/categories/')
            {
                unlink($path_unlink);
            }
                    
            //Add Image
            $path = 'img/categories/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.'-'.Str::random(10).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $category->thumbnail = $new_image;
        }

        $category->save();

        return redirect('admin/category');

    }

    public function delete(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->deleted = true;
        $category->deleted_at = Carbon::now()->addHour(7);

        $category->save();

        return redirect('admin/category');
    }

    public function restore(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->deleted = false;
        $category->deleted_at = null;

        $category->save();

        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $category = Category::findOrFail($request->id);

        //Delete thumbnail
        $path_unlink = 'img/categories/'.$category->thumbnail;
        if(file_exists($path_unlink) && $path_unlink !== 'img/categories/')
        {
            unlink($path_unlink);
        }

        $category->delete(); 

        return redirect('admin/category');
    }
}
