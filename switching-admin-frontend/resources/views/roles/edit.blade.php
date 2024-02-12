
@extends('layouts.master')
@section('title')
   Roles
@endsection
@section('css')
    <!-- links for css here -->
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')User Roles @endslot
        @slot('title')Edit @endslot
    @endcomponent
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="fs-16 mb-1">Edit Role</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- scripts here -->
    <script></script>
@endsection
