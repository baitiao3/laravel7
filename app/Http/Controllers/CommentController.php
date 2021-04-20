<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return "这里是index:".$id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return "这里是create:".$id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return "这里是store:".$request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  int  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id,$comment)
    {
        //
        return "这里是show:".$id." comment:".$comment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $text
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$text)
    {
        //
        return "编辑该id：".$id.' 修改字段:'.$text;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$text)
    {
        //
        return "这里是一个update:".$id." text:".$text;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
