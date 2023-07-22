@extends('admin.admin_master')

@section('admin')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Banner/</span>Skills Icone</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Banner Skills Icone Insert</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('my_portfolio_update') }}" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" value="{{ $banner_ikons->image }}" name="old_img">
                        <input type="hidden" value="{{ $banner_ikons->id }}" name="id">


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Title <span
                                    class="text-danger"></span></label>
                            <input value="{{ $banner_ikons->title }}" type="text" name="title" class="form-control">

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Short Description <span
                                    class="text-danger"></span></label>
                            <input value="{{ $banner_ikons->short_description }}" type="text" name="short_description"
                                class="form-control">

                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>






                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone"> Skills Image Icone </label>
                            <input type="file" name="image" onChange="mainThamUrl(this)"
                                class="form-control phone-mask">
                            <img src="{{ asset($banner_ikons->image) }}" width="100px" height="100px"
                                alt="{{ $banner_ikons->alt_image }}">

                            <img src="" name="image" id="mainThmb">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Seo Image <span
                                    class="text-danger"></span></label>
                            <input type="text" value="{{ $banner_ikons->alt_image }}" name="alt_image"
                                class="form-control">

                            @error('alt_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Link <span
                                    class="text-danger"></span></label>
                            <input type="text" value="{{ $banner_ikons->link }}" name="link" class="form-control">

                            @error('link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
