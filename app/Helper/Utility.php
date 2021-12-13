<?php
namespace App\Helper;
use Illuminate\Support\Facades\Config;

class Utility 
{
    

/**
 * This Function Works For Creating Dynamic Manu.
 * @param array $array.
 * @param int $order
 * @return False.
 */

public function addAdminMenu(array $menuArr,$order=false){
    //Get Data from Config and put into temporary var
    
    $data=config('utilityConfig.adminMenu');
    if($order && !isset($data[$order])){
        $data[$order]=$menuArr;
    }else{
        $data[]=$menuArr; 
    }
   
    //menuArr push in temporary var 
    Config::set('utilityConfig.adminMenu', $data);
    //Re set Config
}



/**
 * This Function Works For Creating Dynamic Manu Child.
 * @param string $slug.
 * @param array $array
 * @return False.
 */

public function addAdminMenuChield($slug,$array){

    $val=config('utilityConfig.adminMenu');
    $val2=$this-> getMultidimensionalArrayIndex($slug,$val);

   $val[$val2]['child'][]=$array;
    Config::set('utilityConfig.adminMenu', $val);

}



/**
 * This Function Works For Finding array Index From Multidimensional Array.
 * @param string $needle.
 * @param array $array.
 * @return int
 */

public function getMultidimensionalArrayIndex($needle,$array){

    $ids = array_filter(array_map(function($item) use($needle) {
        if($item['slug']==$needle){
            return $item;
        };
    }, $array));
    $keys=array_keys($ids);

    return $keys[0];

 }


 /**
 * This Function Works For Create Custom Post.
 * @param array $array.
 * @param string $postType Name.
 * @return False.
 */

public function addCustomPost($pArr,$postType=false ){
        //Get Data from Config and put into temporary var
    
    $data=config('utilityConfig.customPost');
   
    $data[$postType]=$pArr;
    //dd($data);
    //menuArr push in temporary var 
    Config::set('utilityConfig.customPost', $data);
    //Re set Config
   // dd(config('utilityConfig.customPost'));
 }


 /*
 *
 * This Function Works For Create Custom Meta Box.
 * @param array $array.
 * 
 * @return False.
 */

 public  function initCustomPost(){
    //dd(config('utilityConfig.customPost'));
    $RegCustomPosts=config('utilityConfig.customPost');
    //This loop For adding Menu
     foreach($RegCustomPosts as $postType=>$properties){
        //dd($properties);
        $childMenu=[
            
            ['name'=>'New '.$properties['label'],'slug'=>['post.new',[$postType]],'icon'=>''],//Create New MEnu
            ['name'=>'All '.$properties['label'],'slug'=>['post.listview',[$postType]],'icon'=>'']//All Post Menu
        ];//Array Set
        //Taxonomy
        if(count($properties['taxonomies']) > 0){
            foreach($properties['taxonomies'] as $Taxotype => $taxo){
                $childMenu[]= ['name'=>$taxo['label'],'slug'=>['post.new',[$postType]],'icon'=>''];
            }
        }

        $parentMenuArg=['name'=>$properties['label'],'slug'=>['post.listview',[$postType]],'icon'=>'options-outline','child'=>$childMenu];
       // dd($parentMenuArg);
        $this->addAdminMenu($parentMenuArg,$properties['menu_order']);
        //dd(config('utilityConfig.adminMenu'));
    }
 }

}
