<?php?>
<head>
<title>post </title>
</head>
<body>
   <center>
   < form action ="1 page.php"method="post">
        <div class ="box 1">
        <Lable>1.English</lable><input type="text" name="English" placeholder="Enter your Mark"value=" ">
        </div>
        < div class="box 1">
        <label>2.Tamil</label><input type="text" name="Tamil" placeholder="Enter Your Mark"value=" ">
        </div>
        <div class="box 1">
        <label>3.Maths</label><input type="text" name="Maths" placeholder="Enter Your Mark"value=" ">
        </div>
        < div class="box 1">
        <label>4.Science</label><input type="text" name="Science" placeholder="Enter your mark"value=" ">
        </div>
        <div class="box 1">
        <lable>5.Socialscience</label><input type="text" name="Socialscience" placeholder="Enter Your Mark" value=" ">
        </div>
        <input class="button" type="submit" name="log" id="log" value="Get Avg">
        </form>
        </center>
        </body>
        <?php
        $English=$_POST['English'];
        $Tamil=$_POST['Tamil'];
        $Maths=$_POST['Maths'];
        $Science=$_POST['Science'];
        $Socialscience=$_POST['Socialscience'];
         ?>
         <center>
        <h1>Mark List</h1>
        <label>1.English=</label><?php echo $english;?><br>
        <label>2.Tamil=</label><?php echo $tamil;?><br>
        <label>3.Maths=</label><?php echo $maths;?><br>
        <label>4.Science=</label><?php echo $science;?><br>
        <label>5.Socialscience=</label><?php echo $socialscience;?><br>
        <?php
        $total=$English+$Tamil+$Maths+$Science+$Socialscience;
        ?>
        <lable>Total=</lable><?php echo $total;
        $avg=$total/5;?><br>
       <lable>Average=</lable>
       <?php
       echo $avg;
       ?>
       </center>