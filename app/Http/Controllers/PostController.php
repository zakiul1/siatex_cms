<?php

namespace App\Http\Controllers;
use Utility;
use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Helper\Facade\MetaBoxFacade;
use App\Helper\Facade\UtilityFacade;

class PostController extends Controller
{

    public function __construct(){
       
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index($post_type){
        return view('viewPost');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newPostCreate($postType)
    {
        
        
        return view('createNewPost')->with('postType',$postType);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request)
    {
        $postModel= new PostModel();
        $data=$request->all();
        $postModel->tittle=$data['postTitle'];
        $postModel->slug=$data['slug'];
        $postModel->post_type=$data['postType'];
        $postModel->post_type=$data['postType'];
        $postModel->content=$data['content'];
        $postModel->status=$data['publish'];
        
       // $postModel->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
