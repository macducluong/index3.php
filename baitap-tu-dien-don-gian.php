<html>
    <head>
    <ttle></ttle>
        <style>
            .table{
                height: 200px;
                width: 700px;
                background-color: wheat;
            }
            h1{
                text-align: center;
            }
            .search{
                width: 500px;
                margin-left: 17px;
                margin-top: 20px;
            }
            h1{
                color: black;
            }
        </style>
    </head>
    <body>
    <div class="table">
        <h1>dich tieng anh sang tieng viet</h1>
        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="text" class="search" name="search" placeholder="nhap tu can tra nghia">
            <input type="submit" value="dich sang tieng viet">
        </form>
        <?php
        $dictionary = array(
                            "hello"=>"xin chao",
                            "yes"=>"co",
                            "thank you"=>"cam on",
                            "function"=>"ham",
                            "object"=>"doi tuong",
                            "math"=>"toan hoc",
                            "method"=>"phuong thuc",
                            "number"=>"so",
                            "array"=>"mang",
                            "class"=>"lop",
                            "value"=>"gia tri",
                            "no"=>"khong",
                            "goodnight"=>"chao buoi toi",
                            "macluong"=>"mac duc luong",
                            "book"=>"quyen vo",
                            "string"=>"chuoi");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchword = $_POST["search"];
            $flag = 0;
            foreach($dictionary as $word => $description) {
                if($word == $searchword){
                    echo "Tu: " . $word . ". <br/>tieng viet nghia la: " . $description;
                    echo "<br/>";
                    $flag = 1;
                }
            }

            if($flag == 0){
                echo "<p style='color: red'>tu nay khong co nghia.Kiem tra xem ban nhap dung tu chua?</p>";
            }
        }
        ?>
    </div>
    </body>
</html>