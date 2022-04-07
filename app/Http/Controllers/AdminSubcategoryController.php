<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubcategoryStoreRequest;
use App\Http\Requests\SubcategoryUpdateRequest;
use App\Services\SubcategoryService;
use Illuminate\Http\Request;

class AdminSubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubcategoryService $service, Request $request)
    {
        $subcategories = $service->browse();

        return view('admin.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryStoreRequest $request, SubcategoryService $service)
    {
        $subcategory = $service->add($request->validated());

        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubcategoryService $service, $id)
    {
        $subcategory = $service->read($id);
        return view('admin.subcategory.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubcategoryService $service, $id)
    {
        $subcategory = $service->read($id);
        return view('admin.subcategory.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoryService $service, SubcategoryUpdateRequest $request, $id)
    {
        $service->edit($id, $request->validated());

        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubcategoryService $service, $id)
    {
        $service->delete($id);
    }
}