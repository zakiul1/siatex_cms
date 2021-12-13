require('./bootstrap');
import $ from 'jquery';
import 'datatables.net';
import ionicon from './ionic-icon';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


window.$=$;
//console.log(ClassicEditor);
// Icon Add JS
window.addEventListener('load',function(){
    let elem=document.querySelectorAll('.ionic');
    
    elem.forEach(ico => {
        let iconName= ico.getAttribute('data-i');
        if(ionicon[iconName])
        ico.innerHTML=ionicon[iconName];
    });

    //Chield  menu JS Code
    
    let hasChield=document.querySelectorAll('.has-child');
    hasChield.forEach(elLi => {

        elLi.querySelector("a").addEventListener("click", function(e) {
            e.preventDefault();
            var x = elLi.querySelector(".sub-menu");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          });
    });



});

//cke Editor ----------------JS Code-------------------Start-------------
window.editorCk=editorCk;

function editorCk(selector){
  ClassicEditor
	.create( document.querySelector(selector) )
	.then( editor => {
		window.editor = editor;
	} )
	.catch( error => {
		console.error( 'There was a problem initializing the editor.', error );
	} );
}


//cke Editor ----------------JS Code---------------------End--------------



//
