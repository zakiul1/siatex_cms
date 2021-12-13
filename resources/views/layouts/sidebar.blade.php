<div class="sidebar">
    <div class="wrapper">
        <div class="logo">
            <div class="logo-tittle"><a href="{{Route('home')}}"><h3>Logo</h3></a></div>
        </div>
        @php
        echo \App\Helper\AdminSidebar::sideBarHtml();
        @endphp
        <div class="admin-footer">
            
        </div>
    </div>  
</div>
