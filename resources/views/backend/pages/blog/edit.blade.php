@extends('backend.master')
@section('title', 'Blog Edit')

@section('content')

    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('blog.update', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header text-center font-weight-bolder">
                        <h4>Blog Post Edit Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ $blogs->title }}" id="title"
                                class="form-control form-control-sm" placeholder="Enter your post title" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" value="{{ $blogs->slug }}" id="slug"
                                class="form-control form-control-sm" placeholder="Enter Slug URL" required>
                            <small>
                                <p class="slugvalidate"><b></b> </p>
                            </small>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="image">Featured Image</label>
                                <small> image size 1200*630 </small>
                                <input type="file" name="image" id="image" class="form-control form-control-sm"
                                    placeholder="please insert image name" accept="image/*">
                                <img src="{{ asset('image/' . $blogs->image) }}" width="300px">
                            </div>
                            <div class="col">
                                <label for="image">Featured Image alt Text</label>
                                <input name="imagealt" type="text" class="form-control form-control-sm"
                                    placeholder="Image alt Text" value="{{ $blogs->imagealt }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <label for="summary">Meta Description</label>
                                <input type="text" name="summary" id="summary" value="{{ $blogs->summary }}"
                                    class="form-control form-control-sm" placeholder="Enter your post summary" required>
                            </div>
                            <div class="col">
                                <label for="image">Meta Keyword</label>
                                <small> example, example1, example2 </small>
                                <div class="input-area" id="divKeywords">
                                    <input type="text" name="keywords" value="{{ $blogs->keywords }}" id="txtInput"
                                        class="form-control form-control-sm" placeholder="Enter keyword..." />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <select name="category_id[]" id="category_id" class="form-control form-control-sm selectpicker"
                                required multiple data-live-search="true">
                                @foreach ($categories as $c)
                                    <option
                                        @foreach ($blogs->categories as $catId){{ $catId->id == $c->id ? 'selected' : '' }} @endforeach
                                        value="{{ $c->id }}"> {{ $c->category_name }}</option>
                                @endforeach



                            </select>
                        </div>



                        @hasanyrole('Administrator|Editor')
                            <div class="form-group">
                                <label for="blogstatus">Select Post Status {{ $blogs->status }}</label>
                                <select name="status" id="blogstatus" class="form-control form-control-sm" required>
                                    @php
                                        $sActive = '';
                                        $iActive = '';
                                        $cActive = '';
                                        $rActive = '';
                                        if ($blogs->status == 'active') {
                                            $sActive = 'selected';
                                        } else {
                                            $sActive = '';
                                        }
                                        
                                        if ($blogs->status == 'inactive') {
                                            $iActive = 'selected';
                                        } else {
                                            $iActive = '';
                                        }
                                        
                                        if ($blogs->status == 'correction') {
                                            $cActive = 'selected';
                                        } else {
                                            $cActive = '';
                                        }
                                        if ($blogs->status == 'rejected') {
                                            $rActive = 'selected';
                                        } else {
                                            $rActive = '';
                                        }
                                    @endphp
                                    <option value="active" {{ $sActive }}>Published</option>
                                    <option value="inactive" {{ $iActive }}>Unpublished</option>
                                    <option value="correction" {{ $cActive }}>Correction</option>
                                    <option value="rejected" {{ $rActive }}>Rejected</option>
                                </select>
                            </div>

                            <div class="form-group" id="corrections" style="display:none">
                                <label for="summary">Please Describe the Corrections</label>
                                <textarea class="ckeditor form-control" value="{{ $blogs->description }}" id="corrections"
                                    placeholder="Enter the Description" name="corrections">{!! Request::old('content', $blogs->corrections) !!}</textarea>
                            </div>
                        @endhasanyrole
                        <div class="form-group">
                            <label for="description">Post Body</label>
                            <textarea class="ckeditor form-control" value="{{ $blogs->description }}" id="editor"
                                placeholder="Enter the Description" name="description">{!! Request::old('content', $blogs->description) !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')


    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('upload') . '?_token=' . csrf_token() }}',
                },
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $(function() {


            let blogStatus = $("#blogstatus").val();

            if (blogStatus == "correction") {
                $("#corrections").show(1000);
            } else {
                $("#corrections").hide(1000);
            }

            $("#blogstatus").change(function() {

                let blogStatus = $("#blogstatus").val();

                if (blogStatus == "correction") {
                    $("#corrections").fadeIn(1000);
                } else {
                    $("#corrections").fadeOut(1000);
                }
            });
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function convertToSlug(Text) {
            return Text.toLowerCase()
                .replace(/^\s+|\s+$/gm, '')
                .replace(/[^\w ]+/g, '')
                .replace(/ +/g, '-');
        }

        $("#slug").change(function() {

            $(".slugvalidate").css({
                'color': 'green'
            });
            $(".slugvalidate").html("Checking Duplicate Slug.....")

            var slug = $("#slug").val();
            var slugConvert = convertToSlug(slug);

            $.ajax({
                type: "POST",
                url: '{{ url('admin/datavalidation') }}',
                data: {
                    slug: slugConvert
                },
                dataType: "json",
                success: function(res) {
                    if (res.exists) {

                        $(".slugvalidate").css({
                            'color': 'red'
                        });
                        $(".slugvalidate").html("Duplicate slug found!")
                    } else {

                        $(".slugvalidate").css({
                            'color': 'green'
                        });
                        $(".slugvalidate").html("Slug Available !")
                    }
                },
                error: function(jqXHR, exception) {

                }
            });

        });
    </script>
@endsection
