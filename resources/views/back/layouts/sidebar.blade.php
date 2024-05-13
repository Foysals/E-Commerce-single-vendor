  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="active">
                    <a href="{{route('admin.home')}}">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('#') }}">        
                      <i class="dripicons-view-thumb"></i>
                        <span>Category</span>
                     <span class="arrow">
                        <i class="dripicons-chevron-right"></i>
                     </span>
                    </a>
                    <ul class="sh">
                        <li><a href="{{route('category.index')}}"><b>Category</b></a></li>
                        <li><a href="{{route('subcategory.index')}}"><b>Sub Category</b></a></li>
                        <li><a href="{{route('childcategory.index')}}"><b>Child Category</b></a></li>
                        <li><a href="{{route('brand.index')}}"><b>Brand</b></a></li>
                        <li><a href="{{route('warehouse.index')}}"><b>Warehouse</b></a></li>
                    </ul>
                </li>
               
                <li>
                    <a href="{{ url('#') }}">        
                      <i class="dripicons-view-thumb"></i>
                        <span>Offer</span>
                     <span class="arrow">
                        <i class="dripicons-chevron-right"></i>
                     </span>
                    </a>
                    <ul class="sh">
                        <li><a href="{{ route('coupon.index') }}"><b>Coupon</b></a></li>
                        <li><a href="{{ route('campaign.index') }}"><b>E Campaign</b></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('#') }}">        
                      <i class="dripicons-view-thumb"></i>
                        <span>Product</span>
                     <span class="arrow">
                        <i class="dripicons-chevron-right"></i>
                     </span>
                    </a>
                    <ul class="sh">
                        <li><a href="{{ route('product.index') }}"><b>Manage Product</b></a></li>
                        <li><a href="{{ route('product.create') }}"><b>New Product</b></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('#') }}">        
                      <i class="dripicons-view-thumb"></i>
                        <span>Pickup Point</span>
                     <span class="arrow">
                        <i class="dripicons-chevron-right"></i>
                     </span>
                    </a>
                    <ul class="sh">
                        <li><a href="{{ route('pickuppoint.index') }}"><b>Pickup Point</b></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('#') }}">        
                        <i class="dripicons-gear"></i>
                        <span>Settings</span>
                     <span class="arrow">
                        <i class="dripicons-chevron-right"></i>
                     </span>
                    </a>
                    <ul class="sh">
                        <li><a href="{{route('seo.setting')}}"><b>SEO Setting</b></a></li>
                        <li><a href="{{route('website.setting')}}"><b>Website Setting</b></a></li>
                        <li><a href="{{route('page.index')}}"><b>Page Create</b></a></li>
                        <li><a href="{{route('smtp.setting')}}"><b>SMTP Setting</b></a></li>
                        <li><a href="{{route('payment.gateway')}}"><b>Payment Gateway</b></a></li>
                    </ul>
                </li>
</ul>

</div>
            </ul>

       
        </div>
     

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<style>
.arrow{
right: 30px;
position: absolute;
line-height: 26px;

}
.sh li{
line-height: 36px;

}
</style>