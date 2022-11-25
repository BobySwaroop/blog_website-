<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap include -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="user_profile.css">
    <style>
        body{
            background-color:#bad6d1;
        }
        .main{
            margin-left:auto;
            margin-right:auto;
            margin-top:116px;
            height:auto;
            width:1500px;
            background-color:white;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

        }
        .pic{
            margin-top:0px;
        }
        .poster{
          border:2px solid black;
        }
        .a{
          border:4px solid red;
        }
        .b{
          background-color:green;
        }
        .imc{
          height:100px;
          width:80px;
        }
    </style>
</head>




<body>
    <div class="main">
        <!-- profile -->
        <div class="pic">
        <div class="container d-flex justify-content-center align-items-center">
             
             <div class="card" id="page">
              <div class="upper">
                  <img src="blog.webp" class="img-fluid"> 
              </div>
              <div class="user_details">
          <div class="user text-center">
            <div class="profile">
              <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80"> 
            </div>
          </div>


              <div class="mt-5 text-center text_user">

                <h4 class="mb-0">Benjamin Tims</h4>
                <span class="text-muted d-block mb-2">Los Angles || Full Stack Developer || Bay Area, San Francisco, CA</span>
                <p class="text-secondary mb-1"></p>
                      <p class="text-muted font-size-sm"></p>
                      <p class="text-muted font-size-sm">user1@gmail.com</p>

                <button class="btn btn-primary btn-sm follow">Follow</button>
              </div>
              <hr>
    <div class="poster">
          <nav>
            
          <button class="custom-btn btn-5 pos_btn"><span>Posts</span></button>
          <button class="custom-btn btn-5 ses_btn"><span>Settings</span></button>
                     
          </nav>
          <!-- setting div -->
          <div class="setting_div">
              hello this is setting
              
          </div>
          <!-- post div -->
          <div class="post_div">
           

            <!-- template first start -->
            <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="blog_bg.webp" class="bimg" alt=""></a>
        <div class="post-body">
        <div class="post-meta">
        <a class="post-category cat-2" href="category.html">JsavaScript</a>
        <span class="post-date">March 27, 2018</span>
        </div>
        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
        </div>
            <!-- template first end -->

      </div>

          </div>
          <!-- post div ended -->
        

    </div>


</body>

<!-- jquery cdn file include -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $(".pos_btn").click(function(){
    $(".main").append('<div class="post post-thumb"><a class="post-img" href="blog-post.html"><img src="blog_bg.webp" class="bimg" alt=""></a><div class="post-body"><div class="post-meta"><a class="post-category cat-2" href="category.html"></a><span class="post-date">March 27, 2018</span></div><h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3></div></div>');
  
    $(document).scrollTop($(document).height())   
    
  })
  $(".ses_btn").click(function(){
    $('<div class="post post-thumb"><a class="post-img" href="blog-post.html"><img src="blog_bg.webp" class="bimg" alt=""></a><div class="post-body"><div class="post-meta"><a class="post-category cat-2" href="category.html"></a><span class="post-date">March 27, 2018</span></div><h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3></div></div>').hide();
    $(".main").append('<div class="abs">boby swaroop</div>');
    $(document).scrollTop($(document).height())
  $(".post").css("display","none")
  })

  })
  
</script>
</html>





















