@extends('layouts.master')
@section('title')
Reports
@endsection
@section('css')
<!-- links for css here -->
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Reports @endslot
@slot('title') ERP-transaction @endslot
@endcomponent
<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">ERP transaction reports!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- scripts here -->
<script></script>

@endsection
