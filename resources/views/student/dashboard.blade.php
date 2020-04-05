@extends('layouts.app', ['page' => __('Officer'),'pageSlug' => 'officer'])

@section('content')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="video">
                    <img src="{{ asset('white') }}/img/video.mp4" alt="{{ __('Profile Photo') }}">
                </div>
            </div>
            <div class="carousel-item">
                <div class="photo">
                    {{-- <img src="{{ asset('white') }}/img/post_news.jpg" alt="{{ __('Profile Photo') }}"> --}}
                </div>
            </div>
            {{-- <div class="carousel-item">
                <div class="photo">
                    <img src="{{ asset('white') }}/img/welcome_officer.jpg" alt="{{ __('Profile Photo') }}">
                </div>
            </div> --}}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            {{--  --}}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            {{--  --}}
        </div>
        <div class="col-lg-4">
            {{--  --}}
        </div>
        <div class="col-lg-4">
            {{--  --}}
        </div>
    </div>
    
    </div>
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
