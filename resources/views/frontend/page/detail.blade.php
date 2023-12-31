@extends('frontend.layout')
@section('title',"Anasayfa Başlığı")
@section('content')

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h2 class="mt-4 mb-3">Sayfalar</h2>
        <hr>
        <h3 class="mt-4 mb-3">{{$page->page_title}}</h3>


        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="/images/pages/{{$page->page_file}}" alt="">

                <hr>

                <!-- Date/Time -->
                <p> Yayınlama Zamanı
                    <br>
                    {{$page->created_at->format('d.m.Y')}}
                    <br>
                    {{$page->created_at->format('h:i')}}
                </p>

                <hr>

                <p>{!! $page->page_content !!}</p>
                <hr>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">


                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Last Pages</h5>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($pageList as $list)
                                <a href="{{route('page.Detail',$list->page_slug)}}"> <li  class="list-group-item ">{{$list->page_title}}</li></a>
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>

@endsection
@section('css') @endsection
@section('js') @endsection
