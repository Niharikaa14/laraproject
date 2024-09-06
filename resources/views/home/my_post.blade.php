







<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')

      <style>
        .post_des{
            padding: 30px;
            text-align: center;
            background-color: black;
        }
        .tit_des{
            font-size: 30px;
            font-weight: bold;
            padding: 20px;
            color: white;
        }
        .desc_des{
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
            color: whitesmoke;
        }
        .img_des{
            /* height: 200px;
            width: 200px;
            padding: 30px; */
            margin: auto;

        }
      </style>

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')

        @if(session()->has('message'))

        <div class="alert alert-success">
          
        <button type="button" class="close" data-dismiss="alert"
               area-hidden="true">x</button>

               {{session()->get('message')}}

        </div>

        @endif 

         @foreach($data as $data)
         <div class="post_des">
            <img class="img_des" src="/postimage/{{$data->image}}" height="150px" width="150px">
            <h4 class="tit_des">{{$data->title}}</h4>
            <p class="desc_des">{{$data->description}}</p>

            <a href="{{url('my_post_del',$data->id)}}" class="btn btn-danger"
               onclick="return confirm('Are you sure want to delete this?')" >Delete</a>

               <a href="{{url('post_update_page',$data->id)}}" class="btn btn-primary">
                Update
               </a>

         </div>
         @endforeach

      </div>
      
      
      <!-- footer -->
       @include('home.footer')
       <!-- footer end -->

   </body>
</html>