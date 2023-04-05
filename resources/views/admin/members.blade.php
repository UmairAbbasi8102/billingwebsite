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
                        <h1 class="h3 mb-0 text-gray-800">All Members</h1>
                        <a href="{{ route('admin.addmembers') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-add fa-sm text-white-50"></i> Add New Member</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Member</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>image</th>
                                            <th>About</th>
                                            <th>Role</th>
                                            <th>Twitter</th>
                                            <th>facebook</th>
                                            <th>Instagram</th>
                                            <th>linkedin</th>
                                            <th>created_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($members as $key => $member)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> {{ $member->name }} </td>
                                            <td>
                                                <img src="{{ asset($member->image) }}" style="width: 80px"
                                                    class="img-thumbnail w-full" alt="" srcset="">
                                            </td>
                                            <td> {{ $member->about }} </td>
                                            <td> {{ $member->role }} </td>
                                            <td> <a href="{{ $member->twitter_link }}"> <i
                                                        class="fa-brands fa-twitter"></i> </a> </td>
                                            <td> <a href="{{ $member->fb_link }}"><i
                                                        class="fa-brands fa-facebook"></i></a> </td>
                                            <td> <a href="{{ $member->instagram_link }}"> <i
                                                        class="fa-brands fa-instagram"></i> </a> </td>
                                            <td> <a href="{{ $member->linkdin_link }}"> <i
                                                        class="fa-brands fa-linkedin"></i> </a> </td>
                                            <td> {{ $member->created_at->diffForHumans() }} </td>
                                            <td class="d-flex">
                                                <form action="{{ route('users.confirm-delete') }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $member->id }}">
                                                    <button type="submit" class="btn btn-danger memberdel">
                                                        <i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>

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
