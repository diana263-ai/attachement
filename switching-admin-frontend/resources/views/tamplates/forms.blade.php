@extends('layouts.master')
@section('title')
Tamplates
@endsection
@section('css')
<!-- links for css here -->
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Tamplates @endslot
@slot('title') Forms @endslot
@endcomponent
<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Forms tamplates!</h4>
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