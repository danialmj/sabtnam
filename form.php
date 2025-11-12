<html long ="fa">
    <head>
        <meta charset="UTF-8">
        <style>
            body
            {
            background-color:#6996ae;
                font-family:tahoma;      
                direction: rtl;
                text-align: center;
                margin:150px;
            }
              .form
              {
                margin: 80px;

              }

</style>
</head>
<body>
<form class ="form" method="POST"> <br>
<lable> نام  </lable> <br>

<input type ="text" name="first_name"> <br>
            
<lable > نام خانوادگی</lable> <br>

<input type ="text" name="last_name" > <br>
            
<lable> اسم پدر</lable> <br>

<input type ="text" name="father_name" id="n_code"> <br>
            
<lable> نام کاربری</lable> <br>

<input type ="text" name="user_name"> <br>

<lable> رمز </lable> <br>

<input type ="password" name="pas"> <br>
      
<input type="submit"> <br>
</form>
</body>
</head>
<?php
include 'insert.php';
?>
