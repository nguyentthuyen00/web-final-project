@extends('layouts.app')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-envelope-o"></i> Liên hệ</h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('/page-contact') }}">Liên hệ</a></li>
                </ol>
            </div><!-- end col -->                    
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Chúng mình là ai?</h4>
                            <p>Chúng mình là Ecautopass - Tổng hợp tài liệu và đề thi ngành Thương mại điện tử</p>
                        </div>

                        <div class="col-lg-6">
                            <h4>Chúng mình có thể giúp gì cho bạn?</h4>
                            <p>Nếu bạn có điều gì thắc mắc hay những lời góp ý dành cho chúng mình, hãy điền vào form dưới đây. Chúng mình sẽ phản hồi cho bạn sớm nhất có thể. Cảm ơn bạn nhiều <i class="fa fa-heart"></i> </p>
                        </div>
                    </div><!-- end row -->

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                       {{ Session::get('success') }}
                   </div>
                   @endif


                   <div class="row">
                    <div class="col-lg-12">
                        <form class="form-wrapper" method="post" action="{{ route('contactus.store') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}"> <!-- token csrf --> 
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="name" class="form-control" placeholder="Tên của bạn là gì?" name="name" value="{{ $name or old('name') }}" required autofocus>
                                
                            </div>
                            <div class="form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" placeholder="Bạn nhập email ở đây nhé, chúng mình sẽ phản hồi cho bạn!" name="email" value="{{ $email or old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input id="phone" type="phone" class="form-control" placeholder="Có thể cho tụi mình số điện thoại của bạn không?" name="phone" value="{{ $phone or old('phone') }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('object') ? ' has-error' : '' }}">
                                <input id="object" type="object" class="form-control" placeholder="Bạn muốn hỏi chúng mình gì thế?" name="object" value="{{ $object or old('object') }}" required autofocus>
                                @if ($errors->has('object'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('object') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <input id="message" type="message" class="form-control" placeholder="Hãy nói rõ hơn ở đây nhé!" name="object" value="{{ $message or old('message') }}" required autofocus>
                                
                            </div>
                            <button type="submit" class="btn btn-primary"> Gửi <i class="fa fa-envelope-open-o"></i></button>
                        </form>
                    </div>
                </div>
            </div><!-- end page-wrapper -->
            </><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection