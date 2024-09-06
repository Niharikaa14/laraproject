







<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
       <base href="/public">
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      <!-- header section end -->
      
      <div style="margin:auto;" class="col-md-4">
                     <div><img src="/postimage/{{$post->image}}" class="services_img" style="height:400px; padding:20px;"></div>
                     <h4>{{$post->title}}</h4>
                     <h4>{{$post->description}}</h4>
                     <p>Post By <b>{{$post->name}}</b></p>
                     <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
                  </div>

      
      <!-- footer -->
       @include('home.footer')
       <!-- footer end -->

   </body>
</html>