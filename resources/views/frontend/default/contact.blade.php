@extends('frontend.layout')
@section('title',"Anasayfa Başlığı")
@section('content')

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h2 class="mt-4 mb-3">İletişim Formu</h2>
        <HR>

        @if (session()->has('success'))
            <div class="alert alert-success">
               <p>{{session('success')}}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">


                <form method="POST">
                    @CSRF
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><b>Ad Soyad: </b></label>
                            <input class="form-control" type="text" name="name" placeholder="Ad Soyad" >
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label><b>Mail: </b></label>
                            <input class="form-control" type="email" name="email" placeholder="Mail" >
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label><b>Telefon: </b></label>
                            <input class="form-control" type="text" name="phone" placeholder="phone" >
                        </div>
                    </div>


                    <div class="control-group form-group">
                        <div class="controls">
                            <label><b>Mesaj: </b></label>
                            <textarea rows="10" cols="100" class="form-control" name="message" placeholder="Lütfen iletmek istediğiniz mesajınızı giriniz..."></textarea>
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Adres Detayları</h3>

                {!! $adres !!}
                <br>
                {{$ilce}} / {{$il}}
                <br>
                {{$phone_gsm}}
                <br>
                {{$phone_sabit}}
                <br>
                {{$mail}}


            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

        <!-- /.row -->

    </div>

@endsection
@section('css') @endsection
@section('js') @endsection
