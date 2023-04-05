@include('admin.includes.header')
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.includes.sidemenu')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            {{-- top bar --}}
            @include('admin.includes.menu')
            {{-- end top bar --}}

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <a href="{{ route('admin.posts') }}"> <h1 class="h3 mb-0 text-gray-800">All Blog</h1> </a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add new Blog</h6>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('admin.addpost') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="preview_image mb-3 text-center">
                                <img src="" id="img-preview" class="img-thumbnail d-none" alt="" srcset="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="img">Upload Image</label>
                                <input type="file" name="image" id="img" value="{{ old('image') }}" class="form-control d-none" accept="image/*"
                                    onchange="showPreview(event);">
                            </div>

                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="desc" class="form-label">Short Desciption</label>
                                <textarea name="desc" id="desc" class="form-control">{{ old('desc') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="det_desc" class="form-label">Detail Desiption</label>
                                <textarea id="description" name="det_desc">{{ old('det_desc') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-info">Add Blog</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- End of Main Content -->

        {{-- script for image --}}

        <script>
            function showPreview(event)
            {
                if(event.target.files.length > 0)
                {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("img-preview");
                    preview.src = src;
                    preview.classList.remove("d-none");
                }
            }
        </script>

        @include('admin.includes.footer')
