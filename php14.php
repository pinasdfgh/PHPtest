<?php
if(isset($_GET['twid'])){
    $twid=$_GET['twid'];
    $reg='/^[A-Z][12][0-9]{8}$/';
    if(preg_match($reg,$twid)>0){
        $n12s=substr($twid,0,1);
        $letter='ABCDEFGHJKLMNPQRSTXYZIOW';
        $pos=strpos($letter,$n12s)+10;
        //echo $pos;
        $n1=(int)($pos/10);
        $n2=$pos%10;
        $n3=substr($twid,1,1);
        $n4=substr($twid,2,1);
        $n5=substr($twid,3,1);
        $n6=substr($twid,4,1);
        $n7=substr($twid,5,1);
        $n8=substr($twid,6,1);
        $n9=substr($twid,7,1);
        $n10=substr($twid,8,1);
        $n11=substr($twid,9,1);

        $sum=$n1*1+$n2*9+$n3*8+$n4*7+$n5*6+$n6*5+$n7*4+$n8*3+$n9*2+$n10*1+$n11*1;
        if($sum%10==0){
            echo 'OK';
        }else{
            echo 'XX';
        }
    }else{
        echo 'XX';
    }

}
?>

<form>
    <input type="text" name="twid">
    <input type="submit">
</form>
