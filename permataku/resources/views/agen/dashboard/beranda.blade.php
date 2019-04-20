@extends('layouts.agen')
@section('content')
 <!-- Row -->
 <div class="row page-titles"
                style="background:url(/agen/assets/images/background/user-bg.jpg) no-repeat center top;">
                <div class="col-lg-12 text-center">
                    <h1 class="m-t-30">{{$agen->nama_lengkap}}</h1>
                    <h5 class=""><i class="fa fa-map-marker"></i> {{$agen->alamat}}</h5>
                    
                </div>
            </div>
            <!-- Row -->

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!-- card -->
                        <div class="card card-inverse card-info">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-group"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">Total Customer</h3>
                                        <h6 class="card-subtitle">March 2019</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-t-10 p-b-20 align-self-center">
                                        <h2 class="font-light text-white">{{$agen->total_transaksi}} Customer</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-hourglass-half"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">Point Terkumpul</h3>
                                        <h6 class="card-subtitle">March 2019</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-t-10 p-b-20 align-self-center">
                                        <h2 class="font-light text-white"> 0 Point</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- card -->
                        <div class="card card-inverse card-danger">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">Sisa Saldo</h3>
                                        <h6 class="card-subtitle">April 2019</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-t-10 p-b-20 align-self-center">
                                        <h2 class="font-light text-white">Rp. {{$agen->saldo_rekening}}</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                </div>
                <!-- Row -->


                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Komunitas</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Buat Postingan</h3>
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea name="textarea" id="textarea" class="form-control" required
                                                    placeholder="Apa yang anda pikirkan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">
                                                Kirim</button>
                                            <button type="button" class="btn btn-inverse">Batal</button>
                                        </div>
                                        <hr>

                                        <div class="card-body">
                                            <div class="profiletimeline">
                                                <div class="sl-item">
                                                    <div class="sl-left"> <img src="/agen/assets/images/users/2.jpg"
                                                            alt="user" class="img-circle" /> </div>
                                                    <div class="sl-right">
                                                        <div> <a href="#" class="link">Muchammad Fahmi</a>
                                                            <p class="sl-date">Depok</p>
                                                            <div class="m-t-20 row">
                                                                <div class="col-md-3 col-xs-12"><img
                                                                        src="/agen/assets/images/big/img1.jpg" alt="user"
                                                                        class="img-responsive radius" /></div>
                                                                <div class="col-md-9 col-xs-12">
                                                                    <p> Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Integer nec odio. Praesent
                                                                        libero. Sed cursus ante dapibus diam.
                                                                </div>
                                                            </div>
                                                            <div class="like-comm m-t-20"> <a href="javascript:void(0)"
                                                                    class="link m-r-10"><i class="fa fa-comment"></i> 5</a> <a
                                                                    href="javascript:void(0)" class="link m-r-10"><i
                                                                        class="fa fa-heart text-danger"></i> 19</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="sl-item">
                                                    <div class="sl-left"> <img src="/agen/assets/images/users/3.jpg"
                                                            alt="user" class="img-circle" /> </div>
                                                    <div class="sl-right">
                                                        <div><a href="#" class="link">Marca Yolanda</a>
                                                            <p class="sl-date">Bandung</p>
                                                            <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Integer nec odio. Praesent libero. Sed
                                                                cursus ante dapibus diam. Sed nisi. Nulla quis sem at
                                                                nibh elementum imperdiet. Duis sagittis ipsum. Praesent
                                                                mauris. Fusce nec tellus sed augue semper </p>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)"
                                                                class="link m-r-10"><i class="fa fa-comment"></i> 8</a> <a
                                                                href="javascript:void(0)" class="link m-r-10"><i
                                                                    class="fa fa-heart text-danger"></i> 24</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="sl-item">
                                                    <div class="sl-left"> <img src="/agen/assets/images/users/4.jpg"
                                                            alt="user" class="img-circle" /> </div>
                                                    <div class="sl-right">
                                                        <div><a href="#" class="link">Naufal Alwan</a>
                                                            <p class="sl-date">Depok</p>
                                                            <blockquote class="m-t-10">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit, sed do eiusmod tempor incididunt
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Row -->



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

@endsection