<html>
<head>
  <title>@yield('title')</title>
  <style>
    body { font-size:12pt; color:black; margin:5px; }
    h1 { font-size:50pt; text-align:right; color:black; margin:-20px 0px -30px 0px; letter-spacing:2pt; }
    ul { font-size:12pt; }
    hr { margin:25px 100px; border-top:1px dashed #ddd; }
    .menutitle { font-size:14pt; font-weight:bold; margin:0px; }
    .content { margin:10px; }
    .footer { text-align:right; font-size:10pt; margin:10px; border-bottom:solid 1px #ccc; color:black; }
  </style>
</head>
<body>
  <h1>@yield('title')<h1>
  @section('menubar')
  <ul>
    <p class="menutitle">※メニュー</p>
    <li>@show</li>
  </ul>
  <hr size="1">
   <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>
</html>
