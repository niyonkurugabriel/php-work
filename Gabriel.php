<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriel's work</title>
    <style>

      body{
         background-color:grey;
         color: rgb(0,0,0);
      }
      h2{
         color:green;

      }
      fieldset{
         spacing:250px;
         border-radius:20px;
         float:center;
         align-content:center;
         align-self:center;
      }
    </style>
</head>
<body>

    <center>
      <fieldset>
        <h2>electricity bill
        </h2>
        <?php
        

         $unit=300;
         if($unit<=100){
            echo "No charge";

         }  
         elseif($unit<=200){
            echo " the bill paid is 1500frw";
         }          
         elseif($unit<=300){
            echo " the bill paid is 2500frw";
         }
         else{
            echo "invalid bill";
         }

        ?>
        <br></fieldset>
        <fieldset>

        <h2>percentage marks display</h2>
        <?php
       $marks=30;
       if($marks>90){
         echo "A";
       }
       elseif($marks>80 &&$marks<=90){
         echo "B";
       }
       elseif ($marks>=60 && $marks<=80) {
         echo "C";

       }
       else{
         echo "D";
       }
        ?>
        <br></fieldset>
        <fieldset>

        <h2>calculating the road tax </h2>
        <?php


       $cost=700000;
       $tax;
       if($cost>100000){
         $tax=($cost*15)/100;
       }
      else if($cost>500000 & $cost<=1000000){
         $tax=($cost*10)/100;
       }
      else if($cost<=100000){
         $tax=($cost*5)/100;
       }
       else{
         $tax="no money paid mentioned";
       }
       echo "$cost FRW  your road tax is $tax";
      
        ?>
        <br></fieldset>
        <fieldset>
        <h2>Displaying the days of the week</h2>
        <?php
        $day=3;
        $result;
        switch($day){
         case '1':
            $result="sunday";
            break;
            case '2':
               $result="monday";
               break;
               case '3':
                  $result="tuesday";
                  break;
               case '4':
                  $result="wednesday";
                  break;
                  case '5':
                     $result="thursday";
                     break;
                     case '6':
                        $result="saturday";
              break;
             case '7':
               $result="sunday";
           break;
           default:
           $result="no day mentioned";

        }
        echo $result;
        
        ?>
        <br></fieldset>
        <fieldset>
        <h2>the months of the year</h2>
        <?php
        $month=8;
        $me;
        if($month==1){
         $me="january";
        }
        elseif($month==2){
         $me="february";
        }
        elseif($month==3){
         $me="march";
        }
        elseif($month==4){
         $me="april";
        }
        elseif($month==5){
         $me="may";
        }
        elseif($month==6){
         $me="june";
        }
        elseif($month==7){
         $me="july";
        }
        elseif($month==8){
         $me="august";
        }
        elseif($month==9){
         $me="september";
        }
        elseif($month==10){
         $me="october";
        }
        elseif($month==11){
         $me="november";
        }
        elseif($month==12){
         $me="december";
        }
        else{
         $me="no month identified";
        }
        echo $me;
        ?>
        <br>
        </fieldset>
        <fieldset>
        <h2>when checking the positive number or negative number</h2>
        <?php
                     $name=-2;
                     if($name>=0){
                        echo "is a positive number:".$name;
                     }
                     else{
                        echo "is a negative number:".$name;
                     }
        ?>
        <br></fieldset><fieldset>
        <h2>printing if anumber is divisible by 2 or 3</h2>
        <?php
        $eric=5;
        $rich;
        if($eric%2==0 || $eric%3==0){
         echo "this is divisible by two or three:".$eric;
        }
       
        else{
        echo "this number is not divisible by two or three:".$eric;
        }
        
        ?>
        <br></fieldset>
        <fieldset>
        <h2>calculating the simple interest</h2>
        <?php
        $p=50000;
        $t=12;
        $r=1.5;
        $i=($p*$t*$r)/100;
        echo "the interest is:".$i;
        ?>
        <br></fieldset>
        <fieldset>
        <h2>solving quadratic equation</h2>
        <?php
        $a=-1;
        $b=1;
        $c=-1;
        $d=$b*$b-4*$a*$c;
        if($d>0){
         echo "Two real solutions"."<br>";
        
        }
        elseif($d==0){
         echo "One real solution";
        }
        elseif($d<0){
         echo "No real solutions";
        }
        
        ?>
        <br></fieldset>
        <fieldset>
        <h2>calculating body mass index</h2>
        <?php
        
        $W=59;
        $H=1.68;
        $BMI=$W/$H;
        $v;
        if ($BMI<18.5){
         $v="underweight";
        }
        elseif(18.5<=$BMI&&$BMI<24.9){
         $v="normal weight";

        }
        elseif(25<=$BMI&&$BMI<29.9){
         $v="overweight";
        }
        elseif($BMI>=30) {
         $v="obese";
        }
        echo "the BMI is showing that i am:".$v;
        ?>
        <br></fieldset>
        <fieldset>
        <h2>total bill amount</h2>
        <?php
        $total=13000;
        $amount;
        if($total>1000){
        $amount=($total*10)/100;
        }
        echo "the amount is:".$amount;
        ?>
        <br></fieldset>
        <fieldset>
        <h2>showing the largest number</h2>
        <?<php
        $u=2;
        $i=4;
        $o=6;
        
        ?>
        <br></fieldset>
        <fieldset>
        <h2>performing calculation using operators</h2>
        <?php
        $k=4;
        $l=5;
        $m;
        $r='-';
        switch ($r) {
         case '+':
            $m=$k+$l;
            break;
         case '/':
            $m=$k/$l;
            break;
         case '-':
            $m=$k-$l;
            break;
         case '*':
            $m=$k*$l;
            break;        
         
         default:
            $m="invalid operator";
            break;
        }
        echo $m;
        
        ?>
        <br></fieldset>
        <fieldset>

        <h2>calculation of the triangle's Area</h2>
        <?php
        
        $base=7;
        $height=5;
        $area=(1/2)*$base*$height;
        if($area>50){
         echo "$area :Large triangle";
        }
        else {
         echo " $area :Small triangle";
        }
        ?></fieldset>
    </center>
</body>
</html>