<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- include boostrap -->
    <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
<!-- Latest compiled and minified CSS -->
<style>
    
    .containe{
        
        background-color:#bad6d1;
        padding-left:10%;
        padding-right:10%;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .poster{
        position: relative;
        background-color:white;
        padding:5% 10% 5% 10%;
    }
    .image{
        width:100%;
        height:400px;
        border-radius:5px;
       }
    .profile{
        text-align:center;
        }
    .imc{
        border-radius:50%;
        margin-top:-125px;
        width:25%;
        height:25%;

    }
    /* nav bar style */
    .nav_bar{
        display:flex;
        justify-content:space-around;
    }
    /* nav button style */
    .custom-btn {
        width: 130px;
        height: 40px;
        padding: 10px 25px;
        border: 2px solid #000;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
      }
      .btn-5 {
        background: #000;
        color: #fff;
        line-height: 42px;
        padding: 0;
        border: none;
        width:23%;
      }
      .btn-5:hover {
        background: transparent;
        color: #000;
         box-shadow:
         -7px -7px 20px 0px #fff9,
         -4px -4px 5px 0px #fff9,
         7px 7px 20px 0px #0002,
         4px 4px 5px 0px #0001;
      }
      .btn-5:before,
      .btn-5:after{
        content:'';
        position:absolute;
        top:0;
        right:0;
        height:2px;
        width:0;
        background: #000;
        transition:400ms ease all;
      }
      .btn-5:after{
        right:inherit;
        top:inherit;
        left:0;
        bottom:0;
      }
      .btn-5:hover:before,
      .btn-5:hover:after{
        width:100%;
        transition:800ms ease all;
      }
      /* blog post style */
      .post_div{
        display:none;
        
      }
      
      .post-thumb{
        
        margin-bottom: 40px;
        bottom: 0px;
        padding: 20px 15px;
        border-radius:5px;
         width: 45%;
         height: auto;
         margin-left: 5px;
    }
    .post-body{
    bottom: 0px;
    padding: 20px 15px;
    margin-top:-104px;
  
    }
    
    .post-title{
        font-size: 15px;
    }
    .post_div{
        background-color: #fff;
        width: 100%;
        border: none;
    }
    .all_blogs{
        margin-left: 300px;
        
    }
    .bimg{
        width:226%;
        height:220px;
    }
    .imc{
        border:3px solid #fff;
        border-radius: 50%;
    }
    
    /* setting section style */
    

    .section_div{
      display:none;
      margin-top:30px;
      width:350px;
      margin-left:auto;
      margin-right:auto;
    }
    .dd{      
      height:auto;
      margin-left:auto;
      margin-right:auto;
      
      display:none;
    }
    
    <style>
            .row{
              justify-content:space-around;
            }
            .dd .row div{
              position:relative;
              border-radius:10px;
              margin-top:20px;


            }
            .dd .row div .p1{
              position:absolute;
              bottom:20px;
            }
            .dd .row div .p2{
              position:absolute;
              bottom:0;
            }
            .dd .row div div{
              width:100%;
            
              background-size:cover;
              background-position:center;
              height:200px;
              background-repeat:no-repeat;
            }
            .dd .row div .pic{
              width:101%;
              height:70%;
              
              box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .link{
              position:absolute;
              bottom:240px;
              font-size: 134%;
            }
            .post-date{
              position:absolute;
              bottom:200px;
              font-size: 93%;
            }
            .post-title{
              position:absolute;
 
              bottom:98px;
              font-size:20px;
              
            }
            .chr{
              color:white;
              font-size: 68%;
            }
            .align{
              justify-content:space-around;
            }
            
            </style>
    
    
    

</style>
</head>
<body>
   <div class="containe">
    
        <div class="poster">
          <!-- banner image   -->
          <div class="banner_image">
        <img src="blog.webp" class="image"></div>
            <!-- user profile -->
            <div class="profile">
              <img src="https://i.imgur.com/JgYD2nQ.jpg" class="imc"> 
            </div>
            <!-- user details -->
            <div class="mt-5 text-center text_user">

                <h4 class="mb-0">Benjamin Tims</h4>
                <span class="text-muted d-block mb-2">Los Angles || Full Stack Developer || Bay Area, San Francisco, CA</span>
                <p class="text-secondary mb-1"></p>
                      <p class="text-muted font-size-sm"></p>
                      <p class="text-muted font-size-sm">user1@gmail.com</p>

                <button class="btn btn-primary btn-sm follow">Follow</button>
              </div><hr>
              <!-- post section and setting section -->
              <!-- nav bar create -->
              <nav>
            <div class="nav_bar">
          <button class="custom-btn btn-5 pos_btn"><span>Posts</span></button>
          <button class="custom-btn btn-5 ses_btn"><span>Settings</span></button>
             </div> 
             
             
          </nav>
          
            <!-- post section start -->
        <div class="dd">
         <!-- first post -->
        <div class="row gx-4 align">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 " style="">
          <img src="blog.webp" class="pic">
          <a class="link" href="#">Javascript</a>
          <span class="post-date">March 27, 2018</span>
          <h3 class="post-title"><a href="blog-post.html" class="chr">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>

            <div>
              
              
            </div>
           
  
          </div>
          <!-- second post -->
          
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 " style="">
          <img src="blog.webp" class="pic">
          <a class="link" href="#">Javascript</a>
          <span class="post-date">March 27, 2018</span>
          <h3 class="post-title"><a href="blog-post.html" class="chr">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        <div>  
        </div></div>
          <!-- third post -->
        
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 " style="">
          <img src="blog.webp" class="pic">
          <a class="link" href="#">Javascript</a>
          <span class="post-date">March 27, 2018</span>
          <h3 class="post-title"><a href="blog-post.html" class="chr">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        <div>  
        </div></div></div>
          </div>
          

          <!-- </div> -->
                <!-- </div> -->
                 <!-- </div> -->
          

        <!-- post section end -->

          <!-- setting section create -->
          <div class="section_div"> 
            <div class="form-group">
              <label class="sr-only" for="name">Name:</label>
              <input type="text" class="form-control res" id="name" placeholder="Enter Your Name"  name="name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email:</label>
            <input type="text" class="form-control res" id="email" placeholder="Enter email"  name="email">
        </div>
    
        <div class="form-group">
        <label class="sr-only" for="number">Mobile_no:</label>
           <input type="number" class="form-control res" id="number" placeholder="Enter Your Phone Number"  name="number">
            </div>
            <div class="form-group">
        <label class="sr-only" for="genre">Genre:</label>
           <input type="text" class="form-control res" id="genre" placeholder="Genre"  name="genre">
            </div>
          </div>
         
    </div>
    
   </div> 
</body>
<!-- jquery cdn incude -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(".pos_btn").click(function(){
            // $(".poster").append('<div class="post post-thumb"><a class="post-img" href="blog-post.html"><img src="blog_bg.webp" class="bimg" alt=""></a><div class="post-body"><div class="post-meta"><a class="post-category cat-2" href="category.html"></a><span class="post-date">March 27, 2018</span></div><h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3></div></div>')
            $(".dd").toggle();
            $(".section_div").css("display","none");
            // $(".section_div").remove();
            $(".posted").css("margin-left","350px");
            $(document).scrollTop($(document).height())
          })
        
        $(".ses_btn").click(function(){
            $(".section_div").show();
            $(".dd").css("display","none");
            $(document).scrollTop($(document).height())

        })
        
    })
</script>
 </html>
