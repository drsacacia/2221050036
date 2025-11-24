<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 1</title>
</head>
<body>
    <?php 
        // cú pháp in ra màn hình
        echo"hello wolrd <br>";
        echo"php <br>";

        // $ + tên biến = giá trị của biến 
        $ten = "son";
        $tuoi = 20;
        echo $ten . "<br>";
        echo $tuoi . "<br>";
        echo "xin chao " . $ten . " " . $tuoi . "tuổi <br>";

        // hằng
        define("soPi","3.14");
        echo soPi . "<br>";
        // '' va ""
        echo '$ten' . "<br>";
        echo "$ten" . "<br>";

        // kiểm tra độ dài
        echo strlen($ten) . "<br>";
        // đếm từ 
        echo str_word_count($ten) . "<br>";
        // tìm kiếm vị trí ký tự trong chuỗi
        echo strpos($ten, "o") . "<br>";
        // thay thế kí tự trong chuỗi
        echo str_replace("son","ky son",$ten) . "<br>";
        // toán tử
        $sothunhat = 10;
        $sothuhai = 5;
        // + - * /
        echo $sothunhat + $sothuhai . "<br>";
        // %= chia lay du += -= *=
        // %= chia lấy dư và gán nên . không dùng được
        echo $sothunhat %  $sothuhai . "<br>";
        // == != < > <= >=


        // // câu điều kiện
        // if($dieukien){
        //     // logic 
        // }
        // elseif($dieukien){
        //     // logic 
        // }
        // else{
        //     // logic 
        // }


        // ktra tong 2 so
        // <15 hien thi tong la ... nho hon 15
        // =15 tong la 15
        // >15 hien thi tong la ... lon hon 15

        $so1 = 8;
        $so2 =2;
        $tong = $so1 + $so2;
        if($tong > 15){
            echo "tong la " . $tong . " lon hon 15 <br>";
        }
        elseif ($tong == 15){
            echo "tong la " . $tong . " bang 15 <br>";
        }
        else{
            echo "tong la " . $tong . " nho hon 15 <br>";
        }

        // switch case 
        $color = "red";
        switch ($color){
            case "red" :
                echo "is red <br>";
                break;
            case "blue" :
                echo "is blue <br>";
                break;
            default :
                echo "no color <br>";
                break;
        }

        // for 
        for ($i=0; $i < 100; $i++) { 
            # code...
            echo $i . "<br>";
        }
    ?>
</body>
</html>