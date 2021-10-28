@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="rui-navbar-bg"></div>
    <div class="rui-page content-wrap">
      <div class="rui-page-title">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Apps</a></li>
                      </ol>
                    </nav>
                    <h1>Projects</h1>
                </div>

                <div>
                    <button type="button" class="btn btn-brand" data-toggle="modal" data-target="#create_project">
                        Create Project
                    </button>
                </div>
            </div>
        </div>
      </div>


      <div class="rui-page-content">
          <div class="container-fluid p-0">
              <div class="row">
                  <div class="col-md-4 my-3">
                      <div class="card">
                          <div class="card-header p-0">
                              <img src="{{asset('img/living-room-00.jpg')}}" class="card-img-top" alt="">
                            </div>
                            <div class="card-body">
                                <div class="row vertical-gap">
                                    <div class="col-12">
                                        <div class="rui-profile-info">
                                            <h3 class="rui-profile-info-title h4 my-0">Bayof Real Estate Platform</h3>
                                            <small class="text-grey-6 mt-2 mb-15">Real Estate Management Platform</small>
                                            <div class="row">
                                                <div class="col-6 d-flex flex-column">
                                                    <a class="rui-profile-info-mail" href="#" >www.bayof.co</a>
                                                    <a class="rui-profile-info-phone" href="#">+44 987 065 909</a>
                                                </div>

                                                <div class="col-6">
                                                    <div class="row d-flex justify-content-end">
                                                        <div class="rui-profile-number text-right mx-5 py-0">
                                                            <h4 class="rui-profile-number-title h2 my-0">2125</h4>
                                                            <small class="text-grey-6">Views</small>
                                                        </div>

                                                        <div class="rui-profile-number text-right mx-5 py-0">
                                                            <h4 class="rui-profile-number-title h2 my-0">419</h4>
                                                            <small class="text-grey-6">Images</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
                    <div class="card-footer">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-auto p-3">
                                <button class="btn btn-outline-danger">Delete</button>
                            </div>
                            <div class="col-auto p-3">
                                <a href="#" class="btn btn-outline-info"> Hide</a>
                            </div>
                            <div class="col-auto p-3">
                                <a href="#" class="btn btn-outline-info"> Edit</a>
                            </div>
                            <div class="col-auto p-3">
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="create_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h2" id="exampleModalPopupLabel">Create Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span data-feather="x" class="rui-icon rui-icon-stroke-1_5" ></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/projects/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-12">
                        <label>Project Title</label>
                        <input type="text" name="title" class="form-control form-control-lg" placeholder="Project Title">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Project Category</label>
                                <input type="text" name="category" class="form-control form-control-lg" placeholder="Project Category">
                                @error('category')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label>Project Link</label>
                                <input type="url" name="url" class="form-control form-control-lg" placeholder="Project Link">
                                @error('url')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Client Name</label>
                                <input type="text" name="client" class="form-control form-control-lg" placeholder="Client">
                                @error('client')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label>Project Date</label>
                                <input type="date" name="date" class="form-control form-control-lg" placeholder="Date">
                                @error('date')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <label class="text-muted">Project Images</label>
                            <div class="custom-file">
                                <input type="file" name="images" class="custom-file-input form-control-lg" multiple id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            </div>
                            @error('images')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-12">
                        <label class="text-muted">Project Description</label>
                        <div id="editor"></div>
                        <input type="text" name="content" id="description" hidden />
                        @error('content')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                    <button type="submit" class="btn btn-brand">Create Project</button>
                </div>
            </form>
        </div>
    </div>
</div>


@include('admin.layouts.scripts')
