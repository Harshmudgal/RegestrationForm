<html>
    <body>
<?php
    $income=$_POST["amount"];
    $tax;
    $x=1;
    $category=$_POST["income"];
    if($category==1)
    {
        if($income>700000)
        {
            echo "<h1>Please enter a valid Income or category<br></h1>";
            $x=0;
        }
        if($_POST["Age"]<=18)
        {
            echo "<h1>Current age is not elligible<br></h1>";
            $x=0;
        }
        else if($_POST["gender"]=="Male")
        {
            if($_POST["Job"]=="Government")
            $rate=0.05;
            else if($_POST["Job"]=="Private Sector")
            $rate=0.08;
            else
            $rate=0.1;
        }
        else
        {
            if($_POST["Job"]=="Government")
            $rate=0.03;
            else if($_POST["Job"]=="Private Sector")
            $rate=0.06;
            else
            $rate=0.08;
        }
        $tax=$income*$rate;
    }
    else if($category==2){
        if($income>1500000 || $income<700000)
        {
            echo "<h1>Please enter a valid Income or Income Range<br></h1>";
            $x=0;
        }
        if($_POST["Age"]<18)
        {
            echo "<h1>Current age is not elligible<br></h1>";
            $x=0;
        }
        else if($_POST["gender"]=="Male")
        {
            if($_POST["Job"]=="Government")
            $rate=0.08;
            else if($_POST["Job"]=="Private Sector")
            $rate=0.1;
            else
            $rate=0.12;
        }
        else
        {
            if($_POST["Job"]=="Government")
            $rate=0.05;
            else if($_POST["Job"]=="Private Sector")
            $rate=0.08;
            else
            $rate=0.1;
        }
        $tax=$income*$rate;
    }
    else{
        if($income<1500000)
        {
            echo "<h1>Please enter a valid Income or category<br></h1>";
            $x=0;
        }
        if($_POST["Age"]<18)
        {
            echo "<h1>Current age is not elligible<br></h1>";
            $x=0;
        }
        else if($_POST["gender"]=="Male")
        {
            if($_POST["Job"]=="Government")
            $rate=0.1;
            else if($_POST["Job"]=="Private Sector")
            $rate=0.12;
            else
            $rate=0.14;
        }
        else
        {
            if($_POST["Job"]=="Government")
            $rate=0.08;
            else if($_POST["Job"]=="Private Sector")
            $rate=0.1;
            else
            $rate=0.12;
        }
        $tax=$income*$rate;
    }
    if($x==1){
        echo "<h1>Income Tax Regestration complete</h1>";
        echo "Name :".$_POST["Name"]."<br>";
        echo "Adhar card Number: ".$_POST["Adhar"]."<br>";
        echo "Date of birth: ".$_POST["Birth"]."<br>";
        echo "Address: ".$_POST["address"]."<br>";
        echo "<h3>Total payable tax= ".$tax."<h3><br>";
    }
    else{
        echo "<h1>Regestration Failed.....Please retry</h1>";
    }
?>
</body>
</html>