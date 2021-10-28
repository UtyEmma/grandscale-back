@include('admin.layouts.header')

<div class="rui-main">
    <div class="rui-sign align-items-center justify-content-center">
      <div class="bg-image"><div class="bg-grey-1"></div></div>
      <form action="/login" method="post" class="form rui-sign-form rui-sign-form-cloud">
        @csrf
        <div class="row vertical-gap sm-gap justify-content-center">
          <div class="col-12 text-center">
            <h1 class="display-4 mb-10">Sign In</h1>
            <h3 class="mb-0">Grandscale Admin</h3>
          </div>

          <div>
            @isset($message)
             {{$message}}
            @endisset
            @if($errors->any())
                <p class="text-danger">Invalid Input Data</p>
            @endif
            @if(Session::has('error'))
                <p class="text-danger">{{session('error')}}</p>
            @endif
            @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
            @endif
          </div>

          <div class="col-12">
            <input type="email" class="form-control" name="email" placeholder="Email" />
          </div>
          <div class="col-12">
            <input type="password" class="form-control" name="password" placeholder="Password"/>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-brand btn-block text-center">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @include('admin.layouts.scripts')
