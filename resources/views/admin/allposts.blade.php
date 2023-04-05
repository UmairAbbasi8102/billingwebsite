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
                    <h1 class="h3 mb-0 text-gray-800">All Blogs</h1>
                    <a href="{{ route('admin.addposts') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-add fa-sm text-white-50"></i> Add New Blog</a>
                </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>image</th>
                                            <th>description</th>
                                            <th>created_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $key => $post)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                               <img src="{{ asset($post->image) }}" style="width: 80px" class="img-thumbnail w-full" alt="" srcset="">
                                            </td>
                                            <td>{{ $post->desc }}</td>
                                            <td>{{ $post->created_at->diffForHumans() }}</td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- End of Main Content -->

        @include('admin.includes.footer')
