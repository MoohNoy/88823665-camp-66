
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>

<div class="container mt-5">
<form action="<?php echo e(url('/mylaravel')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="h4 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="h4 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> ป้อนแม่สูตรคูณ </label>
                    <input name="myinput" type="number" class="form-control" id="exampleFormControlInput2" placeholder="1 2 3" >
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
                <div class="h2 mb-3">
                Please fill in complete information.
                </div>
                </form>
    <?php  if(isset($_POST["email"]) && ($_POST["myinput"]!=null) && $_POST["email"] != null ){ ?>          
    <div class="h5 border rounded p-3 mt-3 border-dark border-3 alert alert-primary"> <!-- สร้างกรอบ !-->
    <?php echo $_POST["email"]; ?>
    </div>

    <div class="border rounded p-3 mt-3 border-dark border-3 alert alert-success"> <!-- สร้างกรอบ !-->
    <?php 
    for($i=1;$i<=12;$i++){
        ?>
    <div class="row">
        <div class="h2 col text-start text-dark"> 
                <?php echo $myinput; ?> x <?php echo $i; ?> = <?php echo ($i*$myinput); ?><!-- print ตัวคูณ ผลลัพธ์ !-->
        </div>
    </div>
    
    <?php 
        }
    ?>
    </div>
    <?php 
        }
    ?>
</div>
</body>

        <?php /**PATH C:\xampp\htdocs\88823665-camp-66\mylaravel\resources\views/myview.blade.php ENDPATH**/ ?>