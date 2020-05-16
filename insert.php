

<?php
   
   $con = mysqli_connect('localhost','root', '');
   
   if(!$con)
   {
    echo 'Невозможно подключиться к серверу';
   }
   
   if(!mysqli_select_db($con,'bakery1'))
   {
    echo 'Ошибка базы данных';
   }
   
   $name = $_POST['name'];
$surname = $_POST['surname'];
$number = $_POST['number'];
$city = $_POST['city'];
$email = $_POST['email'];
   
   $sql ="INSERT INTO base (name, surname, number, city, email) VALUES ('$name', '$surname', '$number', '$city', '$email')";
   
   if(!mysqli_query($con,$sql))
   {
    echo 'Неизвестная ошибка';
   }
   
   else
   {
    echo 'Данные успешно внесены! Ожидайте звонка менеджера.';
   }
  
?>