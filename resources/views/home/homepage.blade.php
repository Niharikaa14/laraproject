



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
          @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
       @include('home.services')
      <!-- services section end -->
      <!-- about section start -->
      @include('home.about')
      <!-- about section end -->
      <!-- blog section start -->
      @include('home.blogsection')
      <!-- blog section end -->
      <!-- client section start -->
      @include('home.clientsection')
      <!-- client section end -->
      <!-- choose section start -->
      @include('home.choosesection')
      <!-- choose section end -->
      
      <!-- footer -->
       @include('home.footer')
       <!-- footer end -->

   </body>
</html>