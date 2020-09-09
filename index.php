<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALCULATOR</title>




    <!---Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">

    <!---Fonts Awesome--->
    <script src="https://use.fontawesome.com/ef54458de0.js"></script>

</head>

<body>

<section id="header">
    <div class="container main-wrapper">

   



        <div class="row">
        
            <div class="col-md-6 logo">
                <h3>PHP CALCULATOR</h3>
                <p>
                <?php

if(isset($_POST['submit'])){

$num1 = $_POST['fnum'];
$num2 = $_POST['snum'];

$opt = $_POST['operation'];

switch($opt){

    case "ADD":
        $sum = $num1 + $num2;
        echo "The Sum is $sum";
    break;

    case "SUBTRACT" :
        $diff = $num1 - $num2;
        echo "The Difference Value is $diff";
    break;

    case "MULTIPLY" :
        $pro = $num1 * $num2;
        echo "The Product is $pro";
    break;

    case "DIVIDE" :
        $div = $num1 / $num2 ;
        echo "The Dividion Value is $div";
    break;

    default:
    echo "Wrong Entery ";
}


}


?>
                
                
                </p>
           
            </div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <input type="text" name="fnum" id="" placeholder="Enter First Number" required>
                    <input type="text" name="snum" id="" placeholder="Enter Second Number" required>
                    <select name="operation" id="">
                        <option value="ADD">ADD</option>
                        <option value="SUBTRACT">SUBTRACT</option>
                        <option value="MULTIPLY">MULTIPLY</option>
                        <option value="DIVIDE">DIVIDE</option>
                    </select>

                    <button type="submit" name="submit">GET ANSWER</button>
                    </form>
            </div>
        </div>

        <div class="col-12 me">
        <small>Made With <i class="fa fa-heart" aria-hidden="true"></i> love By : <span>Smruti Sourav Nanda</span> </small></div>

    </div>

 
</section>





<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>

</html>