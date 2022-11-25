

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <input type="text" name="username" id="user"> 
   <div id="as"></div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function({
        var username =document.getElementById("user");
        $.ajax({
            url:'checkout.php',
            type:'post',
            data:'username=' +username.value,
            success: function(data){
                if($res==1){
                    $("#as").html('<div id ="as">okay</div>');
                }
                else{
                    alert('no');
                }

            }
        })
    }))
</script>
</html>