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
                    <form method="POST" action="{{ route('admin_WebSetting_update') }}" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" value="{{ $Setting->logo }}" name="old_img">
                        <input type="hidden" value="{{ $Setting->id }}" name="id">

                        <div class="row">


                            <div class="col-md-6 mb-3">
                                <label class="form-label">Copy Right</label>
                                <input type="text" name="copy_right" value="{{ $Setting->copy_right }}"
                                    class="form-control" id="basic-default-company" placeholder="position_job">
                                @error('copy_right')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Mete Author <span
                                        class="text-danger"></span></label>
                                <input type="input" name="mete_author" id="basic-default-phone"
                                    value="{{ $Setting->mete_author }}" class="form-control phone-mask">


                                @error('mete_author')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Logo<span
                                        class="text-danger"></span></label>
                                <input type="file" name="logo" onChange="mainThamUrl(this)" id="basic-default-phone"
                                    class="form-control phone-mask">

                                <img src="{{ asset($Setting->logo) }}" width="100px" height="100px"
                                    alt="{{ $Setting->alt_logo }}">

                                <img src="" name="logo" id="mainThmb">
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Seo Logo <span
                                        class="text-danger"></span></label>
                                <input type="input" name="alt_logo" id="basic-default-phone"
                                    value="{{ $Setting->alt_logo }}" class="form-control phone-mask">


                                @error('alt_logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>








                        <div class="row">
                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Meta Keywords <span
                                        class="text-danger"></span></label>
                                <input type="email" name="meta_keywords" id="basic-default-phone"
                                    value="{{ $Setting->meta_keywords }}" class="form-control phone-mask">
                                @error('meta_keywords')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Title<span
                                        class="text-danger"></span></label>

                                <input type="text" name="title" id="basic-default-phone"
                                    class="form-control phone-mask" value="{{ $Setting->title }}">



                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                        </div>


                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Meta Description<span
                                        class="text-danger"></span></label>
                                <textarea type="input" name="meta_description" id="basic-default-phone" class="form-control phone-mask">
                                    {{ $Setting->meta_description }}
                                </textarea>

                                @error('meta_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="basic-default-phone">Google Analysis <span
                                        class="text-danger"></span></label>
                                <textarea type="email" name="google_analysis" id="basic-default-phone" class="form-control phone-mask">
                                     {{ $Setting->google_analysis }}
                                </textarea>

                                @error('google_analysis')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>




                        <div class="d-flex justify-content-center">

                            <button type="submit"
                                class="btn btn-primary w-25 btn-lg waves-effect waves-light">Send</button>
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
