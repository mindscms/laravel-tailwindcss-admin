<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    public function index()
    {
        if (!auth()->user()->ability('admin', 'manage_pages,show_pages')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.index');
    }

    public function create()
    {
        if (!auth()->user()->ability('admin', 'create_pages')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->ability('admin', 'create_pages')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    public function show($id)
    {
        if (!auth()->user()->ability('admin', 'display_pages')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.show');
    }

    public function edit($id)
    {
        if (!auth()->user()->ability('admin', 'update_pages')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.edit');
    }

    public function update(Request $request, $id)
    {
        if (!auth()->user()->ability('admin', 'update_pages')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    public function destroy($id)
    {
        if (!auth()->user()->ability('admin', 'delete_pages')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

}
