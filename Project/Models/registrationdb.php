<?php 
require_once('db.php');
function auth($Fname,$Lname,$Email,$phone,$pass,$Uname,$Number,$Password,$Security,$Conpass )
{
    $conn=getConnection();


    if ($Fname != null && $Lname != null && $Uname != null && $Email != null && $Number != null && $Password != null && $Security != null && $Password == $Conpass && strlen($Number)==11) { {
        $sql1 = "INSERT INTO registration(Fname, Lname,Email, Uname, Phone, Pass,Designation,security) VALUES ('$Fname','$Lname','$Email','$Uname','$Number','$Password','General User','$Security')";
        mysqli_query($conn, $sql1);
        $res=mysqli_query($conn, $sql1);
        
        if($res)
        {
            return true;
        }else{
            return false;
        }
    }


}

}
function dupuname($Uname)
{
    $conn=getConnection();
    $sql2 = "select Uname from registration where Uname = '$Uname'";
    $res2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($res2);
    return $count2;
}

function dupemail($Email)
{
    $conn=getConnection();
    $sql3 = "select Email from registration where Email = '$Email'";
    $res3 = mysqli_query($conn, $sql3);
    $count3 = mysqli_num_rows($res3);
    return $count3;
}
function dupsecurity($Security)
{
    $conn=getConnection();
    $sql4 = "select security from registration where security = '$Security'";
    $res4 = mysqli_query($conn, $sql4);
    $count4 = mysqli_num_rows($res4);
    return $count4;
}

function logincount($Uname,$Password)
{
    $conn=getConnection();
    $sql1 = "select * from registration where Uname = '$Uname' and Pass = '$Password' ";
    $res = mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($res);
    return $count;
}

function logincount2($Uname,$Designation1)
{
    $conn=getConnection();
    $sql2 = "select Designation from registration where Uname = '$Uname' and Designation='$Designation1'";
    $res2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($res2);
    return $count2;
}

function logincount3($Uname,$Designation2)
{
    $conn=getConnection();
    $sql3 = "select Designation from registration where Uname = '$Uname' and Designation='$Designation2'";
    $res3 = mysqli_query($conn, $sql3);
    $count3 = mysqli_num_rows($res3);
    return $count3;
}

function logincount4($Uname,$Designation3)
{
    $conn=getConnection();
    $sql4 = "select Designation from registration where Uname = '$Uname' and Designation='$Designation3'";
    $res4 = mysqli_query($conn, $sql4);
    $count3 = mysqli_num_rows($res4);
    return $count4;
}

function logincount5($Uname,$Designation4)
{
    $conn=getConnection();
    $sql5 = "select Designation from registration where Uname = '$Uname' and Designation='$Designation4'";
    $res5 = mysqli_query($conn, $sql5);
    $count5 = mysqli_num_rows($res5);
    return $count5;
}

function logincount6($Uname,$Designation5)
{
    $conn=getConnection();
    $sql6 = "select Designation from registration where Uname = '$Uname' and Designation='$Designation5'";
    $res6 = mysqli_query($conn, $sql6);
    $count6 = mysqli_num_rows($res6);
    return $count6;
}

function logincount7($Uname,$Designation6)
{
    $conn=getConnection();
    $sql7 = "select Designation from registration where Uname = '$Uname' and Designation='$Designation6'";
    $res7 = mysqli_query($conn, $sql7);
    $count7 = mysqli_num_rows($res7);
    return $count7;
}

function logincount8($Uname,$Designation7)
{
    $conn=getConnection();
    $sql8 = "select Designation from registration where Uname = '$Uname' and Designation='$Designation7'";
    $res8 = mysqli_query($conn, $sql8);
    $count8 = mysqli_num_rows($res8);
    return $count8;
}

function logincount9($Uname)
{
    $conn=getConnection();
    $sql9 = "select Stat from registration where Uname = '$Uname' and Stat='Banned'";
    $res9 = mysqli_query($conn, $sql9);
    $count9 = mysqli_num_rows($res9);
    return $count9;
}

function userforgotpass($username,$security,$email)
{
    $conn=getConnection();
    $sql1 = "select * from registration where Uname = '$username' and security = '$security' and Email = '$email' ";
    $res = mysqli_query($conn, $sql1);
    return $res;
}

function userchangepass($Password,$uname)
{
    $conn=getConnection();
    $sql2 = "UPDATE registration SET Pass = '$Password' WHERE Uname='$uname'";
    $res = mysqli_query($conn, $sql2);
    return $res;
}

function hallmanagerprofile($uname)
{
    $conn=getConnection();
    $sql = "select * from registration where Uname='$uname'";
    $res = mysqli_query($conn, $sql);
    return $res;
}


 ?>