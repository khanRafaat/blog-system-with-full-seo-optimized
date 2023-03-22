@extends('backend.master')
@section('title', 'Blog Create')

@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="card">
                    @csrf
                    <div class="card-header text-center font-weight-bolder">
                        <h4>Create Blog Post</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control form-control-sm"
                                placeholder="Enter your post title" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control form-control-sm"
                                placeholder="Enter Slug URL" required>
                            <small>
                                <p class="slugvalidate"><b></b> </p>
                            </small>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="image">Featured Image</label>
                                <small> image size 1200*630 </small>
                                <input type="file" name="image" id="image" class="form-control form-control-sm"
                                    placeholder="please insert image name" required accept="image/*">
                            </div>
                            <div class="col">
                                <label for="image">Featured Image alt Text</label>
                                <input name="imagealt" type="text" class="form-control form-control-sm"
                                    placeholder="Image alt Text">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="summary">Meta Description</label>
                                <input type="text" name="summary" id="summary" class="form-control form-control-sm"
                                    placeholder="Enter your post summary" required>
                            </div>
                            <div class="col">
                                <label for="image">Meta Keyword</label>
                                <small> example, example1, example2 </small>
                                <div class="input-area" id="divKeywords">
                                    <input type="text" name="keywords" id="txtInput"
                                        class="form-control form-control-sm" placeholder="Enter keyword..." />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Post Body</label>
                            <textarea class=" form-control" id="editor" placeholder="Enter the Description" name="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">

                <div class="card mb-2">
                    <div class="card-body">
                        @hasanyrole('Administrator|Editor')
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="blogStatus">Select Blog Status</label>
                                    <select name="status"class="form-control" id="blogStatus">
                                        <option value="active">Publish</option>
                                        <option value="inactive" selected>Save as Draft</option>
                                    </select>
                                </div>
                            </div>
                        @endhasanyrole
                        <button type="submit" class="btn btn-primary btn-block">
                            @hasanyrole('Administrator|Editor')
                                Publish
                            @else
                                Request to Publish
                            @endhasanyrole
                        </button>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <div id="catData">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addcategory">Add Category</label>

                            <input type="text" name="addcategory" id="addcategory" class="form-control form-control-sm"
                                placeholder="Enter category name">
                            <small class="text-danger" id="catgeoryStatus"></small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary addCategory">Add</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </form>
@endsection



@section('javaScript')

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('upload') . '?_token=' . csrf_token() }}',
                },
                link: {
                    addTargetToExternalLinks: true,
                    decorators: [{
                        mode: 'manual',
                        label: 'External Link',
                        attributes: {
                            target: '_blank',
                        }
                    }]
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            getCatagories()
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            // add category start

            $(".addCategory").click(function(e) {

                e.preventDefault();

                var categoryName = $("#addcategory").val();
                $(".addCategory").html("Adding...");
                $(".addCategory").attr("disabled", true);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('add.categoryData') }}",
                    data: {
                        addcategory: categoryName
                    },
                    success: function(data) {
                        console.log(data);
                        getCatagories()
                        $("#addcategory").prop("value", "");
                    },
                    error: function(err) {



                        $.each(err.responseJSON.errors, function(i, error) {

                            console.log(error[0]);
                            // $(".home_entry_txt").fadeIn(3000).delay(1000).fadeOut("slow")
                            $('#catgeoryStatus').fadeIn().delay(5000).fadeOut().text(
                                error[0]);
                            $(".addCategory").html("Add");
                            $(".addCategory").removeAttr("disabled");
                        });

                    }
                });

                // }
            });
            // add category end


            // get category start
            function getCatagories() {
                // $( "#catData" ).remove();
                $.ajax({
                    type: 'GET',
                    url: "{{ route('get.categoryData') }}",
                    success: function(data) {
                        let succesData = data.catagoryData;

                        let i = 1;
                        let bodyData = '';
                        $.each(succesData, function(index, row) {

                            bodyData += `<div class="form-check">
                            <input class="form-check-input" name="category_id[]" type="checkbox"
                            value="${row.id}" id="${row.category_name}">
                            <label class="form-check-label" for="${row.category_name}">${row.category_name}</label>
                            </div>`
                        });
                        $("#catData").empty();
                        $("#catData").append(bodyData);
                        $(".addCategory").html("Add");
                        $(".addCategory").removeAttr("disabled");


                    }
                });

            }



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
