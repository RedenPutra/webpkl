@extends('admin.layouts.body')
@section('main')
<div class="container-xxl py-1 bg-dark">
    <div class="container  my-4 pt-5 row">
      <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-11 pt-5">Login</h2>
    </div>
</div>

<div class="container-xxl pt-3 pb-3">
    <div class="container-xxl">
      <div class=" wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-4">Login</h1>
      </div>
      <div class=" wow fadeInUp" data-wow-delay="0.1s">
        <div class=" rounded-0 overflow-hidden">
            <form method="POST" action="{{ route('logins') }}">
                @csrf
                <div>
                    <label class="form-label"><b>Masukan Alamat Email :</b></label>
                    <input type="email" name="email" class="form-control" placeholder="Email"  required>
                </div><br>
                <div>
                    <label class="form-label"><b>Masukan Password :</b></label>
                    <input type="password" name="password" class="form-control" placeholder="Password"  required>
                </div><br>
                <button type="submit" >Login</button>
        
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection