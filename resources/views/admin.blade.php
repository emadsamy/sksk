@extends('index')

@section("content")
    <!-- Home Page -->
  <div class="main-bg"></div>
  <div class="wrapper">
    <div class="homepage">
      <nav id="nav">
        <div class="container-fluid">
          <div class="navbar">
            <div></div>
            <a href="{{ url('/') }}" class="nav-logo">
              <img src="{{ url('assets/img/logo.svg') }}" class="img-fluid" alt="" />
            </a>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="main-title text-uppercase">Advanced and integrated mobility</div>
        <div class="full-page">
          <div class="home-center text-center">


                <table class="table">
                    <tr>
                    <td>ID</td>
                    <td> Name</td>
                    <td>created </td>
                    <td>Edit</td>
                    </tr>
                    @foreach ($signatures as $user)        
                    <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><a href = 'delete/{{ $user->id }}'>Delete</td></a>
                    </tr>
                    @endforeach
        

         

          </div>
        </div>
      </div>
      <footer id="footer">
        <div class="container-fluid height-fluid">
          <div class="footer-content height-fluid d-flex">
            <div class="fc-left">Saudi Aramco Mobility Center</div>
            <div class="fc-right"></div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Home Page -->
@endsection

@push('css')
    
@endpush