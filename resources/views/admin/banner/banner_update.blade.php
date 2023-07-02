@extends('admin.admin_master')

@section('admin')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Banner/</span>Update</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Banner Update</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('banner.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Name</label>
                            <input type="text" name="name" value="{{ $banner->name }}" class="form-control"
                                id="basic-default-fullname" placeholder="Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Welcome Title</label>
                            <input type="text" name="welcome_title" value="{{ $banner->welcome_title }}"
                                class="form-control" id="basic-default-company" placeholder="Welcome Title">
                            @error('welcome_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Banner Image <span class="text-danger">(700
                                    X 760)</span></label>
                            <input type="file" onChange="mainThamUrl(this)" required="" id="basic-default-phone"
                                class="form-control phone-mask">
                            @error('product_thambnail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img src="" id="mainThmb">


                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Message</label>
                            <textarea name="short_description" id="basic-default-message" class="form-control"
                                placeholder="Write The Description Banner Here?">{{ $banner->short_description }}</textarea>
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Send</button>
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
