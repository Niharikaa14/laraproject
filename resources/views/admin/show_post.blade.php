<!DOCTYPE html>
<html>

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('admin.css')

    <style>
    .title {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
    }

    .table_des {
        border: 1px solid white;
        width: 60%;
        text-align: center;
        margin-left: 70px;
    }

    .th_des {
        background-color: pink;
        color: black;
    }
    </style>

</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->


        <div class="page-content">

            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>

                {{session()->get('message')}}

            </div>

            @endif

            <h1 class="title">All Post</h1>

            <table class="table_des">
                <tr class="th_des">
                    <th>Post Title</th>
                    <th>Description</th>
                    <th>Post by</th>
                    <th>Post Status</th>
                    <th>UserType</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Status Accept</th>
                    <th>Status Reject</th>
                </tr>

                @foreach($post as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->post_status}}</td>
                    <td>{{$post->usertype}}</td>
                    <td>
                        <img src="postimage/{{$post->image}}" style="height:50px; width:50px;">
                    </td>
                    <td>
                        <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger"
                            onclick="confirmation(event)">Delete</a>
                    </td>
                    <td>
                      <a href="{{url('edit_post',$post->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('accept_post',$post->id)}}" class="btn btn-info">Accept</a>
                    </td>
                    <td>
                        <a href="{{url('reject_post',$post->id)}}" class="btn btn-warning"
                        onclick="return confirm('Are you sure to Reject?')">Reject</a>
                    </td>
                </tr>
                @endforeach

            </table>

        </div>


        @include('admin.footer')

        <script>
        function confirmation(ev) {

            // it will stop the button from deleting the data
            ev.preventDefault();

            var urlToRedirect=ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
              title:"Are you sure to delete this",
              text:"You won't be able to revert this delete ",
              icon:"warning",
              buttons:true,
              dangerMode:true,
            })

            .then((willCancel)=>
            {
              if(willCancel){
                window.location.href=urlToRedirect;
              }
          });

        }
        </script>

</body>

</html>