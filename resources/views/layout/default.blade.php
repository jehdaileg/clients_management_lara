 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('fontsA/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">

  @livewireStyles


  <title>Clients Management</title>
</head>
<body>

  <div class="wrapper">
    <div class="sidebar">
      <a href="/ind" class="titre_lien"><h4>Management</h4></a>
      <ul>
        <li><a href="{{route('accueil')}}"><i class="fa fa-home"></i>    Accueil</a></li>

        <li><a href="/clients"><i class="fa fa-users"></i>    Clients</a></li>

        

        <li><a href="/entreprises"><i class="fa fa-address-card"></i>    Entreprises</a></li>

        <li><a href=""><i class="fa fa-project-diagram"></i>    Rapports</a></li>

        <li><a href=""><i class="fa fa-hands"></i>    Extensions</a></li>

       

        <li><a href=""><i class="fa fa-address-book"></i>    Contact</a></li>

       


        <li><a href="{{route('apropos')}}"><i class="fa fa-map-pin"></i> A propos </a></li>


        <li>

         
        </li>
        
      </ul>

      <div class="social_media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>

    </div>

    <div class="main_content">
      <div class="header float-right">
        
      <form action="{{ route('logout') }}" method="post">
        @csrf
        @method('post')

        <button class="btn btn-dark"><span class="fa fa-icon-sign-out"></span>Logout</button>
        
      </form>

      </div>

      <div class="info">

         <span style="color: green;">{{auth()->user()->name}}</span><i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <!-- Ajout du container principal pour notre forme générale !-->

        <div class="container-fluid">

          

         @yield('content')


       </div>


       <!-- Fin de l'ajout de la forme générale pour notre application !-->


     </div>
   </div>


 </div>
  <!--

    <footer class="fixed-bottom float-right">&copy; JEHDAI developper &hearts; {{date('Y')}}</footer> -->


  @livewireScripts
  </body>
  </html>