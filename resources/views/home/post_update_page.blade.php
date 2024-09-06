







<!DOCTYPE html>
<html lang="en">
   <head>

   <base href="/public">

      <!-- basic -->
      @include('home.homecss')

      <style>
        .div_des{
            text-align:center;
            background-color:black;
        }
        .img_des{
            margin:auto;
        }
        label{
            font-size:18px;
            font-weight:bold;
            width:200px;
            color:white;
        }
        .input_des{
            padding:30px;
        }
        .title_des{
            font-size:20px;
            font-weight:bold;
            padding:20px;
            color:white;
        }
      </style>

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')

         <div class="div_des">

         @if(session()->has('message'))

        <div class="alert alert-success">
          
        <button type="button" class="close" data-dismiss="alert"
               area-hidden="true">x</button>

               {{session()->get('message')}}

        </div>

        @endif

         <h1 class="title_des">Update Post</h1>   

            <form action="{{url('update_post_data',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf

                <div class="input_des">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>

                <div class="input_des">
                    <label>Description</label>
                    <textarea name="description">{{$data->description}}</textarea>
                </div>

                <div class="input_des">
                    <label>Current Image</label>
                    <img src="/postimage/{{$data->image}}" height="300px" width="200px" class="img_des">
                </div>

                <div class="input_des">
                    <label>Change Current Image</label>
                    <input type="file" name="image">
                </div>

                <div class="input_des">
                    <input type="submit" class="btn btn-success" value="Update">
                </div>

            </form>
         </div>

      </div>
      <!-- header section end -->
      
      <!-- footer -->
       @include('home.footer')
       <!-- footer end -->

   </body>
</html>