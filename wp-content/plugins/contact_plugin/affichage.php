
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <style>
    .container
    {
        width:50%;
        height:220px;
        background-color: black;
        border-radius:10px;
        display:none;

    }
    p
    {
        float:right;
        font-size: 20px;
        cursor:pointer;
    }
    </style>

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Content</th>
      <th scope="col">Rependre</th>
    </tr>
  </thead>
  <tbody>
    <?php
            $connection = mysqli_connect('localhost','root','');
            mysqli_select_db($connection,"wordpress2");
            $requette = "SELECT * FROM contactus order by id desc "; 
            $result = mysqli_query($connection, $requette);
            while ($row = $result->fetch_assoc()) {
                echo '<tr ><td>'. $row["fullname"] . '</td><td name="email">' . $row["email"] . '</td><td>' . $row["subjecte"] . '</td><td>' . $row["content"] . '</td>'.'<td><input class="btn btn-primary" onclick="poppup()" type="submit" value="Repondre"  /></td></tr>';
            }
    ?>
  </tbody>
</table>
<div class="container" id="message">
<h1 class="text-center text-white">Repondre</h1>
<p class=" btn btn-outline-light" onclick="function2()">x</p>
<form action="" method="post">
<input type="hidden" value="mtahramal13@gmail.com" name="emailuser">
<input type="text" class="form-control" name="message"><br/>
<button class="btn btn-outline-light" name="repondre">Rependre</button>
</form>
</div>
<?php
if(isset($_POST['repondre'])){
    $to=$_POST['emailuser'];
    $subject="hello";
    $message = $_POST['message'];
    wp_mail($to,$subject,$message);
}
?>

<script>
        function poppup(){
            var message=document.getElementById("message");
            message.style="display:block";
        }
        function function2(){
            var message=document.getElementById("message");
            message.style="display:none";
        }
    </script>
</body>
</html>