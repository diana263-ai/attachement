@extends('layouts.master')

@section('content')

    <div class="row">
        <!--end col-->
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header">
                <div id="timeout">
                           @if(Session::has('success'))
                     <p class="alert alert-info">{{ Session('success') }}</p>
                      @endif
                      @if(Session::has('error'))
                     <p class="alert alert-danger">{{ Session('error') }}</p>
                      @endif
                      </div>
                    <div class="row g-2">
                        <div class="col-md-3">
                            <div class="search-box">
                           <h4>Device Register</h4>
                            </div>
                        </div>
                       

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                            <div class="card-body">
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead class="table-light">
                                <tr>
                                    <th class="sort" data-sort="id">ID</th>
                                    <th class="sort" data-sort="name">Device Name</th>
                                    <th class="sort" data-sort="imei">Imei</th>
                                    <th class="sort" data-sort="status">Status</th>
                                    <th class="sort" data-sort="terminal_id">Terminal ID</th>
                                    <th class="sort" data-sort="pos_type">Pos Type</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                @foreach($records as $record)
                                   
                                        <td class="id">{{$record->id}}</td>
                                        <td class="name">{{$record->name}}</td>
                                        <td class="imei">{{$record->imei}}</td>
                                        <td class="status">{{$record->status}}</td>
                                        <td class="terminal_id">{{$record->terminal_id}}</td>
                                        <td class="pos_type">{{$record->pos_type}}</td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                         @include('devices.modals.show')
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-trigger="hover"
                                                       data-bs-placement="top" href="#showModal{{$record->id}}">
                                                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                        View</a></li>
                                                <li><a class="dropdown-item" href="{{route('device.edit',[$record->id])}}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a></li>
                                                        <li><a class="dropdown-item" href="{{route('device.delete',[$record->id])}}" >
                                                       <i class="ri-delete-bin-line text-danger align-middle"></i>
                                                       Delete</a></li>
                                                
                                            </ul>
                                            </div>
                                        </td>


                                </tr>
                                @endforeach

                            </table>

                        </div>

                    </div>
                    <!--end add modal-->


                </div>
            </div>
            <!--end card-->
        </div>



@endsection
@section('script')
            <script src="{{ URL::asset('/assets/libs/list.js/list.js.min.js') }}"></script>
            <script src="{{ URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
            <script src="{{ URL::asset('/assets/js/pages/crm-companies.init.js') }}"></script>
            <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
            <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>


@endsection













