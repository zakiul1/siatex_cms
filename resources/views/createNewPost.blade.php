@extends('layouts.app')



@section('content')

<div class="admin-page-inner">
    <h1 class="admin-page-inner-tittle">Create new</h1>
    <hr/>
    <form action="{{Route('post.store',$postType)}}" method="POST">
        @csrf
        <div class="post-body row">
            <div class="post-left col-sm-8 col-md-9" >
                <div class="editorDiv" >
                    <input name="postTitle"  id="pageTitle"type="text" class="form-control postTitle" placeholder="Write The Title">
                    <input name="postType" value="{{$postType}}" class="d-none" >
                    <div class="PageSlug">
                        Permalink : http://www.siatex.com/<input type="text" name="slug" id="editSlug" class="form-control-sm postSlug">
                    </div>
                    <div class="editor">
                        <textarea name="content" id="editor" class="d-none"></textarea>
                    </div>
                       
                </div>
                <div class="metaBox-bottom">
                            @php
                                echo \App\Helper\Facade\MetaBoxFacade::metaboxBilder('bottom');
                            @endphp
                    
                </div>
            </div>
          
            <div class="post-left col-sm-4s col-md-3" >
                
                       @php
                       echo \App\Helper\Facade\MetaBoxFacade::metaboxBilder('side');
                       @endphp
                   
            </div>
           
            </div>
    </form>
</div>
@endsection

@section('script')
<script >
 //Editor 

editorCk('#editor');

//Editor 

//Slug maker function Start

    let getPageTitle=document.getElementById("pageTitle");
    getPageTitle.addEventListener("keyup", function(){
        let pageTitleValue = getPageTitle.value;
        let result= pageTitleValue.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
            .toLowerCase();
            result= result.replace(/^\s+|\s+$/gm,'').replace(/\s+/g, '-'); ;
  
    let getSlugID=document.getElementById("editSlug");
    getSlugID.value=result ;
});



</script>

@endsection