<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostCategoriesController extends Controller
{
    public function index()
    {
        if (!auth()->user()->ability('admin', 'manage_post_categories,show_post_categories')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_categories.index');
    }

    public function create()
    {
        if (!auth()->user()->ability('admin', 'create_post_categories')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_categories.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->ability('admin', 'create_post_categories')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    public function show($id)
    {
        if (!auth()->user()->ability('admin', 'display_post_categories')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_categories.show');
    }

    public function edit($id)
    {
        if (!auth()->user()->ability('admin', 'update_post_categories')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_categories.edit');
    }

    public function update(Request $request, $id)
    {
        if (!auth()->user()->ability('admin', 'update_post_categories')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    public function destroy($id)
    {
        if (!auth()->user()->ability('admin', 'delete_post_categories')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

}
