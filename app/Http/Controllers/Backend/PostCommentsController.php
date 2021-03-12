<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostCommentsController extends Controller
{
    public function index()
    {
        if (!auth()->user()->ability('admin', 'manage_post_comments,show_post_comments')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_comments.index');
    }

    public function create()
    {
        if (!auth()->user()->ability('admin', 'create_post_comments')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_comments.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->ability('admin', 'create_post_comments')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    public function show($id)
    {
        if (!auth()->user()->ability('admin', 'display_post_comments')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_comments.show');
    }

    public function edit($id)
    {
        if (!auth()->user()->ability('admin', 'update_post_comments')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.post_comments.edit');
    }

    public function update(Request $request, $id)
    {
        if (!auth()->user()->ability('admin', 'update_post_comments')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    public function destroy($id)
    {
        if (!auth()->user()->ability('admin', 'delete_post_comments')){
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

}
