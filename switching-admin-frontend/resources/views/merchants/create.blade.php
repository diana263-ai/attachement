@extends('layouts.master')
@section('title') Create Merchant @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
    <!-- Sweet Alert css-->
    <link href="{{ URL::asset('assets/libs/dropzone/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card">
                <form  action="{{route('merchants.store')}}" method="POST">
                    @csrf
                    <div class="card-body border-bottom border-bottom-dashed p-4">
                        <div class="row">

                            <!--end col-->
                         
                        <!--end row-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                            <div id="timeout">
                           @if(Session::has('success'))
                     <p class="alert alert-info">{{ Session('success') }}</p>
                      @endif
                      @if(Session::has('error'))
                     <p class="alert alert-danger">{{ Session('error') }}</p>
                      @endif
                      </div>
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><strong>CREATE MERCHANT<strong></h4>
                                </div><!-- end card header --><br><br>
                                <div class="card-body">
                                    <div >
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                                <label><strong>Merchant Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="name" required/>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label><strong>First Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="firstname" required/>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label><strong>Last Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="lastname" required/>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <br><br>
                                        <!--end row-->
                                        <div class="row align-items-center g-3">
                                            <div class="col-lg-4">
                                                <label><strong>Email:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="email" required/>
                                            </div>
                                            <div class="col-lg-4">
                                                <label><strong>Cellphone:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="cellphone" required/>
                                            </div>
                                            <div class="col-lg-4">
                                                <label><strong>Company Name:</strong></label>
                                                <input class="form-control form-control-sm" type="text" name="company_name" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row align-items-center g-3">
                                        <div class="col-lg-4">
                                            <label><strong>Registration Date:</strong></label>
                                            <input class="form-control form-control-sm" type="date" name="registration_date" required/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label><strong>Bank Name:</strong></label>
                                            <input class="form-control form-control-sm" type="text" name="bank_name" required/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label><strong>Bank Account Number:</strong></label>
                                            <input class="form-control form-control-sm" type="text" name="account" required/>
                                        </div>
                                    </div>
                                    <br><br>
                                    <label><strong>Address:</strong></label>
                                    <div class="mb-2" style="width:100%">
                                        <textarea class="form-control bg-light border-0" rows="6" name="address"></textarea>
                                    </div>
                                                                </div>
                                                                <!--end row-->

                                                            

                                                                                    <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                                                                        <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/cleave.js/cleave.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/invoicecreate.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

@endsection