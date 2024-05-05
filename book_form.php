<?
$connection =mysqli_connect('localhost','root','','book_db');
if(isset($_POST['send'])){
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $location= $_POST['location'];
    $guests= $_POST['guests'];
    $arrivals= $_POST['arrivals'];
    $depature= $_POST['departure'];
  
   
    $request =" insert into book-form(name, email, phone, address, location, guests, arrivals, leaving) values('$name', '$email', '$phone', '$address', 'location', '$guests', '$arrivals', '$leaving') ";
    mysqli_connect($connection, $request);

    header('location:book.html');
}

else{
    echo 'something went wrong,try again';
}
?>