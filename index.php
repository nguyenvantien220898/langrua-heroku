<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
$weight = $height = '';
if (isset($_POST["height"]) && isset($_POST["weight"])){
    $weight =  $_POST["weight"];
    $height =  $_POST["height"];

    $bmi = $weight/($height*$height);


}
if ($bmi<18.5){
    echo "chỉ số BMI là : " . $bmi. "<br>Phân loại:gầy";
} elseif ($bmi >=18.5 && $bmi<25){
    echo "chỉ số BMI là : " . $bmi. "<br>Phân loại:bình thường";
} elseif ($bmi >=25 && $bmi<29.9){
    echo "chỉ số BMI là : " . $bmi."<br>Phân loại:hơi béo";
} elseif ($bmi >=30 && $bmi<24.9){
    echo "chỉ số BMI là : " . $bmi. "<br>Phân loại:béo phì cấp 1";
} elseif ($bmi >=35 && $bmi<39.9){
    echo "chỉ số BMI là : " . $bmi. "<br>Phân loại:béo phì cấp 2";
} elseif ($bmi >40){
    echo "chỉ số BMI là : " . $bmi. "<br>Phân loại:béo phì cấp 3";
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Tính chỉ số BMI</h1>

            <form name="bmi" action="" method="post">
                <div class="form-group">
                    <label >Chiều cao ( cm )</label>
                    <input type="text" class="form-control" name="height" value="<?php echo "$height"?>">
                </div>
                <div class="form-group">
                    <label >Cân nặng ( kg ) </label>
                    <input type="text" class="form-control" name="weight" value="<?php echo "$weight"?>">
                </div>
                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




</body>
</html>