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
                <form action="#" method="post">

                    <div class="form-group col-12">
                        <input type="text" class="form-control form-control-lg" placeholder="Project Title">
                    </div>

                    <div class="form-group col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-lg" placeholder="Project Subtitle">
                            </div>

                            <div class="col-md-6">
                                <input type="url" class="form-control form-control-lg" placeholder="Project Link">
                            </div>


                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control-lg" multiple id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-12">
                        <div class="rui-quill">
                            <span data-feather="chevron-down" class="rui-icon rui-icon-stroke-1_5 rui-quill-select-icon"></span>
                            <div class="rui-quill-toolbar">
                                <div class="ql-formats">
                                    <select class="ql-header"></select>
                                </div>
                                <div class="ql-formats">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>
                                    <button class="ql-strike"></button>
                                    <button class="ql-image"></button>
                                </div>
                                <div class="ql-formats">
                                    <button class="ql-clean"></button>
                                </div>
                                <div class="ql-formats">
                                    <button type="button" class="ql-list" value="ordered"></button>
                                    <button type="button" class="ql-list" value="bullet"></button>
                                </div>
                                <div class="ql-formats">
                                    <button class="ql-link"></button>
                                </div>
                            </div>
                            <div class="rui-quill-editor" ><p class="text-muted">Project Description</p></div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-brand">Save changes</button>
            </div>
        </div>
    </div>
</div>


@include('admin.layouts.scripts')
