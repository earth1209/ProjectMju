@extends('layouts.app', ['page' => __('Student'),'pageSlug' => 'compa_information'])

@section('content')

   
    
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
