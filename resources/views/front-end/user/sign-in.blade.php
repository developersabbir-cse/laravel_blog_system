@extends('front-end.master')

@section('body')
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">

                        <div class="card bg-primary">
                            <div class="card-body ">
                                <div class="col-lg-10 ml-auto">
                                    <h3 class="text-danger">{{ Session::get('message') }}</h3>
                                    <form action="{{ route('visitor-sign-in') }}" method="post" class=" text-white">
                                        @csrf

                                        <div class="form-group">
                                            <label class="col-form-label col-md-3">Email Address</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email_address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label col-md-3">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" name="btn" value="Register" class="btn btn-success">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>










                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">3 Comments</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img src="upload/author.jpg" alt="" class="rounded-circle">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                                                <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">Leave a Reply</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper">
                                        <input type="text" class="form-control" placeholder="Your name">
                                        <input type="text" class="form-control" placeholder="Email address">
                                        <input type="text" class="form-control" placeholder="Website">
                                        <textarea class="form-control" placeholder="Your comment"></textarea>
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->

            </div>
        </div><!-- end container -->
    </section>
@endsection