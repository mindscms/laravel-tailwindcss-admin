<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        if (!auth()->user()->ability('admin', 'manage_posts,show_posts')){
            return abort(Response::HTTP_FORBIDDEN);
        }
        return view('backend.posts.index');
    }

    public function create()
    {
        if (!auth()->user()->ability('admin', 'create_posts')){
            return redirect()->route('admin.posts.index');
        }
        return view('backend.posts.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->ability('admin', 'create_posts')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //

    }

    public function show($id)
    {
        if (!auth()->user()->ability('admin', 'display_posts')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.posts.show');
    }

    public function edit($id)
    {
        if (!auth()->user()->ability('admin', 'update_posts')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.posts.edit');
    }

    public function update(Request $request, $id)
    {
        if (!auth()->user()->ability('admin', 'update_posts')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //

    }

    public function destroy($id)
    {
        if (!auth()->user()->ability('admin', 'delete_posts')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //


    }

}
