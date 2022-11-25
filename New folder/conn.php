<?php
$conn=mysqli_connect("localhost","root","","blog");
if($conn){
echo "done";


if(isset($_POST['submit'])){
    

$userid=$_POST['userid'];
$date=$_POST['date'];
$lstmfddate=$_POST['lstdate'];
$blgtitle=$_POST['blgtitle'];
$blgcon=$_POST['editordata'];
$category=$_POST['category'];
$tag=$_POST['tags'];
 


$file_name =$_FILES["banimg"]["name"];

 $tmp = $_FILES["banimg"]["tmp_name"];

$target_file=basename($_FILES["banimg"]["name"]);

$imgfiletype=pathinfo(PATHINFO_EXTENSION);

    if (move_uploaded_file($tmp,$_SERVER['DOCUMENT_ROOT']."/today task/blogpost/".$file_name)) {
           echo "The file ". htmlspecialchars( basename( $_FILES["banimg"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }




$query="INSERT INTO `post_tab`(`userid`, `date`, `last_modified`, `blog_title`, `blog_content`,`banner_img`,`categories`, `tags`)
 VALUES ('$userid','$date','$lstmfddate','$blgtitle','$blgcon','$file_name','$category','$tag')";
 

echo $query;
$result=mysqli_query($conn,$query);
if($result){
    echo "done";
}else{
    echo "not done";
}


}
}





?>