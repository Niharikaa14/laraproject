







<!DOCTYPE html>
<html lang="en">
   <head>

   <style>
        .div_des{
            text-align:center;
        }

        .title_des{
            font-size: 30px;
            font-weight :bold;
            color: black;
            padding: 30px;
        }

        label{
            display: inline-block;
            width: 200px;
            color: black;
            font-size: 20px;
            font-weight: bold;
        }

        .field_des{
            padding: 20px;
        }
      </style>
    
      <!-- basic -->
      @include('home.homecss')

   </head>
   <body>

   @include('sweetalert::alert')

      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      <!-- header section end -->
      
    <div class="div_des">

    <!-- @if(session()->has('message'))

        <div class="alert alert-success">
          
        <button type="button" class="close" data-dismiss="alert"
               area-hidden="true">x</button>

               {{session()->get('message')}}

        </div>

        @endif -->

        <h3 class="title_des">Add Post</h3>

        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="field_des">
                <label>Title</label>
                <input type="text" name="title">
            </div>

            <div class="field_des">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>

            <div class="field_des">
                <label>Add Image</label>
                <input type="file" name="image">
            </div>

            <div class="field_des">
                <input type="submit" value="Add Post" class="btn btn-primary">
            </div>

        </form>
    </div>
      
      <!-- footer -->
       @include('home.footer')
       <!-- footer end -->

   </body>
</html>