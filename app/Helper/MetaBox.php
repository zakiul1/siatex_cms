<?php
namespace App\Helper;
use Illuminate\Support\Facades\Config;

class MetaBox{

    public $metaboxes=[];
    public function __construct(){
      
        ksort($this->metaboxes);  
    }


  public function addMetaBox($marry,$pos="bottom"){
    $data=config('utilityConfig.metaBox');
        $data[$pos][]=$marry;
    Config::set('utilityConfig.metaBox', $data);
}

public  static function publishMetabox(){
 $html="<div class='mBoxBody'><div class='draftPrev'> <button type='button' class='btn-cms-default' >Save to Draft</button><button type='button' class='btn-cms-default' >Show Preview</button></div></div>";
 $html.="<div class='mBoxFooter'> <a href='#'>Delete</a><button class='btn-cms-default'  type='button'>Update</button> <button class='btn-cms-primary'  type='button'>Publish</button> </div>";


 return $html;
}

public static function bottomMetabox(){
    $html= '<input name="postTitle" id="pageTitle" type="text" class="form-control postTitle" placeholder="Write The Title">
    <input name="postTitle" id="pageTitle" type="text" class="form-control postTitle" placeholder="Write The Title">
    ';
    return $html;
}

 /**
 * This Function Works For Bilding Custom Meta Box.
 * @param array $array.
 * 
 * @return False.
 */

 public  function metaboxBilder($pos="bottom"){
 
    $this->metaboxes=config('utilityConfig.metaBox');

    $html='<div class="metaBoxParent">';
   
    foreach($this->metaboxes[$pos] as  $item){
        
        $html.="<div class='meta-box-header'><div class='metaBox-title '> $item[title] </div><div class='meta-box-triger'><a href='javascript:' class='down'><span></span></a></div></div>";
        $html.="<div class='meta-box-content $item[title]'>$item[callback] </div>";

    }
    $html.=' </div>';
    return $html;

 }
 

}