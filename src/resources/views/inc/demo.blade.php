@if(config('lbd.load_demo_content'))

@push('demo')
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch-image">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="switch-mini">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Fixed Navbar</p>
                    <label class="switch-nav">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-1.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-3.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-4.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-5.jpg') }}" alt="" />
                </a>
            </li>
            {{--<li class="button-container">
                <div>
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get free demo!</a>
                </div>
            </li>
            <li class="button-container">
                <div>
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block">Buy now!</a>
                </div>
            </li>
            <li class="button-container">
                <div>
                    <a href="https://demos.creative-tim.com/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documention</a>
                </div>
            </li>
            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round twitter-sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round facebook-sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>--}}
        </ul>
    </div>
</div>
@endpush

@push('styles')
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('vendor/lbd/css/demo.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('vendor/lbd/js/demo.js') }}"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

        demo.initVectorMap();
    });
</script>
@endpush

@endif