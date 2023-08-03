@extends('admin.admin_master')

@section('admin')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table/</span>Testimonial</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Testimonial</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('insert_testimonia') }}" enctype="multipart/form-data">

                        @csrf



                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Title <span
                                    class="text-danger"></span></label>
                            <input type="text" name="title" class="form-control">

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Short Description <span
                                    class="text-danger"></span></label>
                            <textarea type="text" name="short_description" class="form-control"></textarea>

                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>










                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone"> Image </label>
                            <input type="file" name="testimonial_image" onChange="mainThamUrl(this)"
                                class="form-control phone-mask">
                            <img src="" id="mainThmb">
                            @error('testimonial_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Seo Image <span
                                    class="text-danger"></span></label>
                            <input type="text" name="alt_image" class="form-control">

                            @error('alt_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">From Date To Date <span
                                    class="text-danger"> Mar 4, 2015 - Aug 30, 2021</span></label>
                            <input type="text" name="from_date_to_date" class="form-control">

                            @error('from_date_to_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Name <span
                                    class="text-danger"></span></label>
                            <input type="text" name="testimonial_name" class="form-control">

                            @error('testimonial_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Testimonial Company <span
                                    class="text-danger"></span></label>
                            <input type="text" name="testimonial_company" class="form-control">

                            @error('testimonial_company')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Testimonial Position<span
                                    class="text-danger"></span></label>
                            <input type="text" name="testimonial_position" class="form-control">

                            @error('testimonial_position')
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
