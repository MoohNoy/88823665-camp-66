<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
<body>
<div class="container mt-5">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> Enter a number </label>
                    <input name="detail" type="number" class="form-control" id="exampleFormControlInput2" placeholder="1 2 3" >
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
                <div class="h2 mb-3">
                Please fill in complete information.
                </div>
            </form>
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {?>
            <div class="h2 col text-start mt-2  ">
                <?php  if($_POST["email"]!=null && $_POST["detail"]!=null){ //เขียนเงือนไขต้องกรอกข้อมูลให้ครบทุกช่อง
                    echo $_POST["email"]; //show email [Postใช้งานใกล้เคียงกับ get{} ]
                    $num = $_POST["detail"]; //สร้างตัวแปร
                    ?>
                    <div class="border rounded p-3 mt-3 border-dark border-3 " > <!-- สร้างกรอบ !--> 
                    <?php 
                    for ($i = 1; $i <= $num; $i++) {
                        ?>
                        <div class="row ">
                            <div class="h2 col text-start mt-1"> 
                            <?php echo $i; ?> เป็นเลข <?php if($i%2==0){echo "คู่" ; }else{echo "คี่" ;}  ?> <!-- print เลขคู่คี่ !--> 
                            </div>
                        </div>
                    <?php 
                        }
                    ?>
                    </div>
                    <?php
                    }
                } 
                ?>
            </div>
</div>
</body>
</html>