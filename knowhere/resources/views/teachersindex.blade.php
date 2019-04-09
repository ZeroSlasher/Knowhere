<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Teacher's Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Provision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <!-- Custom Theme files -->
    <link href="teachers/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="teachers/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="teachers/css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- //online-fonts -->


    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <!---modal style--->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teachers page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style type="text/css">
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .modal-login {
        color: #636363;
        width: 350px;
    }

    .modal-login .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }

    .modal-login .modal-header {
        border-bottom: none;
        position: relative;
        justify-content: center;
    }

    .modal-login h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -15px;
    }

    .modal-login .form-control:focus {
        border-color: #70c5c0;
    }

    .modal-login .form-control,
    .modal-login .btn {
        min-height: 40px;
        border-radius: 3px;
    }

    .modal-login .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }

    .modal-login .modal-footer {
        background: #ecf0f1;
        border-color: #dee4e7;
        text-align: center;
        justify-content: center;
        margin: 0 -20px -20px;
        border-radius: 5px;
        font-size: 13px;
    }

    .modal-login .modal-footer a {
        color: #999;
    }

    .modal-login .avatar {
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: -70px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        z-index: 9;
        background: #60c7c1;
        padding: 15px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .modal-login .avatar img {
        width: 100%;
    }

    .modal-login.modal-dialog {
        margin-top: 80px;
    }

    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border: none;
    }

    .modal-login .btn:hover,
    .modal-login .btn:focus {
        background: #45aba6;
        outline: none;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
    </style>




    <!--like style-->
    <style>
    .like-content {
        display: inline-block;
        width: 100%;
        margin: 40px 0 0;
        padding: 40px 0 0;
        font-size: 18px;
        border-top: 10px dashed #eee;
        text-align: center;
    }

    .like-content span {
        color: #9d9da4;
        font-family: monospace;
    }

    .like-content .btn-secondary {
        display: block;
        margin: 40px auto 0px;
        text-align: center;
        background: #ed2553;
        border-radius: 3px;
        box-shadow: 0 10px 20px -8px rgb(240, 75, 113);
        padding: 10px 17px;
        font-size: 18px;
        cursor: pointer;
        border: none;
        outline: none;
        color: #ffffff;
        text-decoration: none;
        -webkit-transition: 0.3s ease;
        transition: 0.3s ease;
    }

    .like-content .btn-secondary:hover {
        transform: translateY(-3px);
    }

    .like-content .btn-secondary .fa {
        margin-right: 5px;
    }

    .animate-like {
        animation-name: likeAnimation;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-duration: 0.65s;
    }

    @keyframes likeAnimation {
        0% {
            transform: scale(30);
        }

        100% {
            transform: scale(1);
        }
    }
    </style>

    {{-- <style>
    .img-circle {
     border-radius: 50%;
 }
     </style> --}}

</head>

<body>


    <script>
    $(function() {
        $(document).one('click', '.like-review', function(e) {
            $(this).html('<i class="fa fa-heart" aria-hidden="true"></i> ');
            $(this).children('.fa-heart').addClass('animate-like');
        });
    });
    </script>



    {{-- <script>
        function myFunction(x) {
          x.classList.toggle("fa-thumbs-down");
        }
        </script> --}}




    <!----modal--->

    <div class="text-center"></div>
    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar" style="background-color:white;">
                        <img src="teachers/images/pencil.jpg" alt="Avatar">
                    </div>
                    <h5 class="modal-title">Share your ideas!!!</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="page-login-form box">

                        <form method="post" action="/userpost" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label for="postdata">Enter your post:</label>
                                {{-- <input type="text" name="plantname"  /> --}}
                                <textarea name="postdata" rows="8" cols="30"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Upload image:</label>
                                <input type="file" name="image" accept=".png,.jpg,.jpeg.JPG">

                                {{-- <input type="submit" value="Upload Image" name="submit" style="color: red;text-align: center;
                                    text-decoration: none;display: inline-block;font-size: 16px;" /> --}}

                            </div>

                            <button type="submit" style="background-color:#2c81dc;border: none;color: white; padding: 15px 32px;text-align: center;
                                    text-decoration: none;display: inline-block;font-size: 16px;">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- main -->
    <div class="main-content inner" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <!-- nav -->
                <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">

                    <div class="img-circular">
                        <form action="teachp" method="POST" enctype="multipart/form-data">
                            <ul>
                                @isset($eview)
                                @foreach($eview as $data)
                                <table style="color:#FFFFFF; ">
                                    <li>
                                        <tr>
                                            <td>
                                            <td><img src="storage/upload/{{$data->image}}" class="img-circle"
                                                    style="width:90px;height:90px;"></td>
                                            </td>
                                        </tr>
                                    </li>
                            </ul>

                            </table>
                            @endforeach
                            @endisset

                        </form>

                    </div>
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-lg-3 ml-auto">

                        <li><a href="/postview">Home</a></li>
                        <li><a href="/teachp">Profile</a></li>

                        <li>

                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down"
                                    aria-expanded="false"></span>
                            </label>
                            <a href="#" class="nav-link dropdown-toggle">Resources <span aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="/workshops" class="drop-text">Workshops</a></li>
                                <li><a href="/noteuploads" class="drop-text">Notes</a></li>
                                <li><a href="#" class="drop-text">Reviews</a></li>
                                <li><a href="#" class="drop-text">Courses</a></li>

                            </ul>
                        </li>
                        <li><a href="">Contact Us</a></li>
                        <li>
                            <label for="drop-2" class="toggle">Dropdown<span class="fa fa-angle-down"
                                    aria-hidden="true"></span>
                            </label>
                            <a href="#" class="nav-link dropdown-toggle">{{session()->get('email')}} <span
                                    aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-3" />
                            <ul>
                                <li><a href="/notif" class="drop-text">Notifications</a></li>
                                <li><a href="#" class="drop-text">Statistics</a></li>
                                <li><a href="#" class="drop-text">Reviews</a></li>
                                <li><a href="/logout" class="drop-text">Log out</a></li>

                            </ul>
                        </li>
                        {{-- <li>
                            <img src="storage/upload/{{$data->pimage}}" class="img-circle"
                        style="width:70px;height:70px;">
                        </li> --}}

                    </ul>
            </div>
            <br><br><br><br>
            <ul>
                <li style="color:#FFFFFF; text-align:center; font:medium; font-style:italic;">"Join a conversation and
                    find teachers like you. Ask or answer a question, share your thoughts in a post, or join a
                    conversation that’s already started".</li>
            </ul>



            <!-- //nav -->

        </header>
        <!-- //header -->
    </div>
    <!-- //main -->
    <!-- banner-bottom -->
    <section>
        <form class="form-group" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-lg-6 form-group" align="right"><br><br>

                    <button type="submit" name="submit" style="background-color:#2c81dc;border: none;color: white; padding: 15px 32px;text-align: center;
  text-decoration: none;display: inline-block;font-size: 16px;"><a class="nav-link" href="#myModal1"
                            data-toggle="modal" style="color:white;"> Create Post</a></button><br><br>

                </div>
            </div>

            <form action="/postview" method="post" enctype="multipart/form-data">


                <div class="contacts-area mg-b-15">
                    <div class="container-fluid">

                        {{-- <div class="row"> --}}
                        @foreach ($pview as $data)
                        @if ($data->post_status==0)


                        <?php
$a = DB::select(DB::raw("select count(postsid) as likes from likes where  postsid = $data->postsid"));
foreach ($a as $o) {
    $likes = $o->likes;
}

?>
                        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="border:blue 1px ridge; margin-top:20px; margin-left:55px;height:fit-content;" > --}}
                        <br>
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30"
                            style="border:blue 1px ridge;">
                            <div class="panel-body custom-panel-jw" style="border-bottom:12px;">
                                <div class="row">
                                    <img src="storage/upload/{{$data->pimage}}" class="img-circle"
                                        style="width:70px;height:70px;">
                                    <h3><a href="">{{$data->fname}} {{$data->lname}}</a>
                                        <h3>
                                </div>
                                <br>

                                <center>
                                    <div class="row" style="width:1030px; text-align:justify;">
                                        <p
                                            style="word-wrap:break-word;font-family:'Times New Roman', Times, serif;font-size:medium;">
                                            {{$data->postdata}}
                                        </p>
                                    </div>
                                </center>
                                @if($data->image!="")
                                <center><img class="" src="storage/upload/{{$data->image}}" width="270px"
                                        height="190px"></center>
                                @endif
                            </div>
                            <div class="panel-footer contact-footer" style="background: #006DF0;">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        {{-- <form action="/likepost" method="POST">
                                                            @csrf --}}
                                        <div class="contact-stat"><span> <button id="like_btn{{$data->postsid}}"
                                                    class="btn-secondary like-review" name="likecount">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>

                                                </button></span> <strong style="color:white;"
                                                id="like_count{{$data->postsid}}"><?php echo $likes; ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;<span>Comments:
                                            </span> <strong>350</strong></div>
                                        {{-- </form> --}}

                                        <div class="contact-stat"></div>
                                    </div>

                                </div>

                            </div>
                            {{-- </div> --}}
                        </div>
                        <script>
                        var postid = {
                            {
                                $data - > postsid
                            }
                        };


                        document.getElementById('like_btn{{$data->postsid}}').onclick = function() {


                            var postid = {
                                {
                                    $data - > postsid
                                }
                            };
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: 'POST',
                                url: '/like',
                                data: {
                                    postid: postid
                                },
                                success: function(data) {
                                    console.log(data);
                                    document.getElementById("like_count{{$data->postsid}}").innerHTML =
                                        "";
                                    document.getElementById("like_count{{$data->postsid}}").innerHTML =
                                        data;

                                }
                            });
                        }
                        </script>

                        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
                        @endif
                        @endforeach
                        {{-- </div> --}}
                    </div>
                </div>

            </form>

    </section>
    <!-- //banner-bottom -->

    <!-- footer -->
    <br><br><br>
    {{-- <footer class="footer-content text-center py-5">

    </footer> --}}
    <!-- //footer -->


    <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
</body>

</html>
