@extends('admin.admin_master')

@section('admin')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Social Media/</span> Icone</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"> Social Media Icone Insert</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('footer_social_media_icon_update') }}" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" value="{{ $social_media_footer->id }}" name="id">




                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Social Media icon <span
                                    class="text-danger"></span></label>
                            <input type="text" value="{{$social_media_footer->icon}}" name="icon"  class="form-control">

                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Link <span
                                    class="text-danger"></span></label>
                            <input type="text" value="{{$social_media_footer->link}}" name="link"  class="form-control">

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
