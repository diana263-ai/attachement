<div class="modal fade" id="deleteModal{{$record->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Merchant  Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <input type="hidden" id="id-field" />
                    <div class="row g-3">
                        <div class="col-lg-12">
                        <form action="{{route('merchants.destroy',$record->id)}}" method="post">
                            <div class="modal-body">
                                @csrf
                            @method('POST')
                        <h5 class="text-center">Are you sure you want to delete {{ $record->name }} ?</h5>
                        </div>               
                        </div>
{{--                        <div class="col-lg-12">--}}
{{--                            <div>--}}
{{--                                <label for="contact_email-field" class="form-label">Responsible Person</label>--}}
{{--                                <input type="text" id="contact_email-field" class="form-control"--}}
{{--                                     value="{{$record->responsible_person}}" required />--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes</button>
    </div>
                </div>
            </form>
        </div>
    </div>
</div>
