<!DOCTYPE html>
<html lang="en">

@include('admin.partials._head')

<body>
@include('admin.partials._header')
@include('admin.partials._sidebar')

 

  <main id="main" class="main">

    @yield('content')
    
  @include('admin.partials._footer')


    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('admin.partials._scripts')

</body>

</html>