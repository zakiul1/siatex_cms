<?php
namespace App\Helper;
use \Initialization;
use \Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Helper\Facade\UtilityFacade;
use App\Helper\Facade\MetaBoxFacade;
class AdminSidebar{

    public $items= [];
    function __construct(){
       
        $this->items=config('utilityConfig.adminMenu');
       
        ksort($this->items); 
     
        
     
            //(config('utilityConfig.customPost'));
         
           // dd($daata);
    } 
    

    private function getRoute($route)
    {
        $param=[];
        if(is_array($route)){
            $name=$route[0];
            
            $param=$route[1]; 
                       
        }else{
            $name=$route;
        }

        if(Route::has($name)) {
            return Route($name,$param);
        }else{
            return $name;
        }
         // dd($daata); 
    }

    public static function sideBarHtml(){
        
    /*     Utility:: addCustomPost(

            [
                'label' => "Siatex",
                'menu_icon' => 'fal fa-newspaper',
                'taxonomies' => [
                    'page-category' => ['label' => "Page Categories", 'show_in_menu' => true],
                ],
                'menu_order' => 4,
                'show_in_menu' => true,
                'show_in_nav_menus' => true,
                'editor_permalink_show' => true,
                'editor_show' => true,
                'show_in_dash' => true,
                'in_slug' => true,
            ],"Siatex"
        ); */
       //dd(config('utilityConfig.customPost'));
        $html= "<div class='bar-links'><ul>";
        $th=new AdminSidebar();
        foreach($th->items as $item){
                //check for child
                $current="";
                //$current=request()->routeIs($item['slug'].'*')?"active":"";
                //if child exist parent link will be emty 
                $stl="";
                if(is_array($item['child']) && count($item['child']) > 0){
                    $stl='has-child';
                }
                $link=$th->getRoute($item['slug']);

                $html.="<li class='bar-link $stl $current'><a href='$link' ><span class='iconD'><i class='ionic' data-i='$item[icon]'></i></span><span class='titleD'>$item[name]</span>";
                   $html.="</a>";
                   if(is_array($item['child'])){
                       
                       $html.="<ul class='sub-menu' style=\"display:none\">";
                    foreach($item['child'] as $subitem){
                        $subcurrent="";
                       //$subcurrent=request()->routeIs($subitem['slug'].'*')?"active":"";

                        
                        $Chlink=$th->getRoute($subitem['slug']);
                        
                      $html.="<li class='sub-li $subcurrent'><a href='$Chlink'><i class='iconD' data-i='$subitem[icon]'></i><span>$subitem[name]</span></a></li>";
                    }
                    $html.= "</ul>";
                  }
                $html.="</li>";  
            
             
        }
        $html.= "</ul></div>";
        return $html;
        
    }


}