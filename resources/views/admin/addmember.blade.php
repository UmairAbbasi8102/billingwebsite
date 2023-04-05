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
                  <a href="{{ route('admin.members') }}"> <h1 class="h3 mb-0 text-gray-800">All Member</h1> </a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add new Member</h6>
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

                        <form id="addmember" action="{{ route('admin.storemembers') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="preview_image mb-3 text-center">
                                <img src="" id="img-preview" class="rounded d-none" style="width: 100px;" alt="" srcset="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="img">Upload Image</label>
                                <input type="file" name="image" id="img" value="{{ old('image') }}" class="form-control d-none" accept="image/*"
                                    onchange="showPreview(event);">
                            </div>

                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" name="role" id="role" value="{{ old('role') }}" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="about" class="form-label">about</label>
                                <input type="text" name="about" id="about" value="{{ old('about') }}" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="twitter_link" class="form-label">twitter_link</label>
                                <input type="text" name="twitter_link" id="twitter_link" value="{{ old('twitter_link') }}" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fb_link" class="form-label">fb_link</label>
                                <input type="text" name="fb_link" id="fb_link" value="{{ old('fb_link') }}" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="instagram_link" class="form-label">instagram_link</label>
                                <input type="text" name="instagram_link" id="instagram_link" value="{{ old('instagram_link') }}" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="linkdin_link" class="form-label">linkdin_link</label>
                                <input type="text" name="linkdin_link" id="linkdin_link" value="{{ old('linkdin_link') }}" class="form-control" required>
                            </div>

                            <button id="submit-button" type="submit" class="btn btn-info">Add Member</button>
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
