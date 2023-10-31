@extends('admin.tema')
@section('title')Yönetim Paneli @endsection
@section('css')
<!-- Chartist -->
<link rel="stylesheet" href="{{asset('yonetim')}}/plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="{{asset('yonetim')}}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
@endsection

@section('orta')
<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Kurumsal</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">2</h2>
                            <p class="text-white mb-0">Temmuz 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Ürünler</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">2</h2>
                            <p class="text-white mb-0">Temmuz 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Hizmetler</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">2</h2>
                            <p class="text-white mb-0">Temmuz 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Bloglar</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">99%</h2>
                            <p class="text-white mb-0">Temmuz 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                    </div>
                </div>
            </div>
        </div>
            </div>
        
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="./images/users/8.jpg" class="rounded-circle" alt="">
                            <h5 class="mt-3 mb-1">Kurumsal</h5>
                            <p class="m-0">Kurumsal Sayfası</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="./images/users/5.jpg" class="rounded-circle" alt="">
                            <h5 class="mt-3 mb-1">Ürünler</h5>
                            <p class="m-0">Ürünler Sayfası</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="./images/users/7.jpg" class="rounded-circle" alt="">
                            <h5 class="mt-3 mb-1">Hizmetler</h5>
                            <p class="m-0">Hizmetler Sayfası</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="./images/users/1.jpg" class="rounded-circle" alt="">
                            <h5 class="mt-3 mb-1">Bloglar</h5>
                            <p class="m-0">Bloglar Sayfası</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-facebook">
                            <span class="s-icon"><i class="fa fa-facebook"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">89k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">119k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-linkedin">
                            <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">89k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">119k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-googleplus">
                            <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">89k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">119k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-twitter">
                            <span class="s-icon"><i class="fa fa-twitter"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">89k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1">119k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- #/ container -->
</div>
@endsection

@section('js')
<!-- ChartistJS -->
<script src="{{asset('yonetim')}}/plugins/chartist/js/chartist.min.js"></script>
<script src="{{asset('yonetim')}}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
@endsection