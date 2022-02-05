<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-image: radial-gradient(circle at 14.64% -11.24%, #e8de86 0, #dce189 4.17%, #d0e48d 8.33%, #c3e793 12.5%, #b6ea9b 16.67%, #a8eca4 20.83%, #9aeead 25%, #8befb8 29.17%, #7cf0c3 33.33%, #6df1cf 37.5%, #5df2db 41.67%, #4cf2e6 45.83%, #3cf2f2 50%, #2df1fd 54.17%, #25f1ff 58.33%, #28efff 62.5%, #36eeff 66.67%, #49ecff 70.83%, #5ce9ff 75%, #71e7ff 79.17%, #85e3ff 83.33%, #99e0ff 87.5%, #acdcff 91.67%, #bfd8ff 95.83%, #d0d4ff 100%);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LMS-256</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/kontak')}}">Contact</a>
              </li>
            </ul>
            <a class="btn btn-primary" href="{{url('/login')}}" role="button">Sign in</a>
          </div>
        </div>
      </nav>
      @yield('content')
      <footer class="bg-warning p-2 mt-3" style="background-image: radial-gradient(circle at 74.18% 116.45%, #e8de86 0, #dce189 4.17%, #d0e48d 8.33%, #c3e793 12.5%, #b6ea9b 16.67%, #a8eca4 20.83%, #9aeead 25%, #8befb8 29.17%, #7cf0c3 33.33%, #6df1cf 37.5%, #5df2db 41.67%, #4cf2e6 45.83%, #3cf2f2 50%, #2df1fd 54.17%, #25f1ff 58.33%, #28efff 62.5%, #36eeff 66.67%, #49ecff 70.83%, #5ce9ff 75%, #71e7ff 79.17%, #85e3ff 83.33%, #99e0ff 87.5%, #acdcff 91.67%, #bfd8ff 95.83%, #d0d4ff 100%);">
           <div class="text-center">©2021 LMS-256 All rights reserved.</div>
            </div>
      </footer>

</body>
</html>
