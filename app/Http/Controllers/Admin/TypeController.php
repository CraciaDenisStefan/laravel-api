<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();

        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
    {
        $form_data = $request->all();

        $type = new Type();

        if($request->hasFile('image_type')){

            $path= Storage::put('types_image', $request->image_type);
            $form_data['image_type']= $path;
        }

        $type->fill($form_data);
        $type->save();

        return redirect()->route('admin.types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeRequest  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        $form_data = $request->all();


        if($request->hasFile('image_type')){

            if($type->image_type){
                Storage::delete($type->image_type);
            }

            $path= Storage::put('types_image', $request->image_type);
            $form_data['image_type']= $path;
        }

        $type->update($form_data);


        return redirect()->route('admin.types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
       
        if($type->image_type){
            Storage::delete($type->image_type);
        }
        $type->delete();

        return redirect()->route('admin.types.index');
    }
}
