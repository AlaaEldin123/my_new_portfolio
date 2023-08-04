@extends('admin.admin_master')

@section('admin')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Contact With Me/</span> Update</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Contact With Me Update</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('ContactWithMe_update') }}" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" value="{{ $contact_with_me->image }}" name="old_img">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" name="name" value="{{ $contact_with_me->name }}"
                                    class="form-control" id="basic-default-fullname" placeholder="Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Position Job</label>
                                <input type="text" name="position_job" value="{{ $contact_with_me->position_job }}"
                                    class="form-control" id="basic-default-company" placeholder="position_job">
                                @error('position_job')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Image <span
                                        class="text-danger"></span></label>
                                <input type="file" name="image" onChange="mainThamUrl(this)" id="basic-default-phone"
                                    class="form-control phone-mask">

                                <img src="{{ asset($contact_with_me->image) }}" width="100px" height="100px"
                                    alt="{{ $contact_with_me->alt_image }}">

                                <img src="" name="image" id="mainThmb">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Seo Image <span
                                        class="text-danger"></span></label>
                                <input type="input" name="alt_image" id="basic-default-phone"
                                    value="{{ $contact_with_me->alt_image }}" class="form-control phone-mask">


                                @error('alt_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">First Phone <span
                                        class="text-danger"></span></label>
                                <input type="input" name="first_Phone" id="basic-default-phone"
                                    value="{{ $contact_with_me->first_Phone }}" class="form-control phone-mask">


                                @error('first_Phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Second Phone <span
                                        class="text-danger"></span></label>
                                <input type="input" name="second_Phone" id="basic-default-phone"
                                    value="{{ $contact_with_me->second_Phone }}" class="form-control phone-mask">


                                @error('second_Phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">First Email <span
                                        class="text-danger"></span></label>
                                <input type="email" name="first_email" id="basic-default-phone"
                                    value="{{ $contact_with_me->first_email }}" class="form-control phone-mask">


                                @error('first_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Second Email <span
                                        class="text-danger"></span></label>
                                <input type="email" name="second_email" id="basic-default-phone"
                                    value="{{ $contact_with_me->second_email }}" class="form-control phone-mask">


                                @error('second_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>



                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-default-message">Short Description</label>
                            <textarea name="short_description" id="basic-default-message" class="form-control"
                                placeholder="Write The Description Banner Here?">{{ $contact_with_me->short_description }}</textarea>

                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>




                        <div class="d-flex justify-content-center">

                            <button type="submit" class="btn btn-primary w-25 btn-lg waves-effect waves-light">Send</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
