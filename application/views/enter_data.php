<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <style>

.headbar{
    width: 100%;
    height:250px;
    background:  url("<?php echo base_url('images/im1.jpg'); ?>")  no-repeat center 0;
    border-bottom: 10px solid  rgba(218, 172, 48, 0.692);

}

.logo{
border-radius: 50%;
width:150px;
float: right;
height:150px;
background-image: url("<?php echo base_url('images/1mg2.png'); ?>");
background-size: cover; 

margin-top: -70px;
position: -webkit-sticky;
  position: sticky;
border-bottom: 10px solid #227589;
/*border-right: 10px solid rgb(20, 143, 81);*/
border-top: 10px solid rgb(218, 172, 48);
/*border-left: 10px solid rgba(218, 172, 48, 0.692);*/


}
.logo:hover{
    transition-duration:1s;
    transform: rotate(360deg);
}
.menu{
    float: left;
    width:100%;
    height:50px;
    margin-top:260px;
    background: #227589  ;
    position: sticky; 
    left: 0px; 
    top: 0px; 
    z-index: 1;
   
    

}
a{
        padding:5px;
        display:inline;
    }
.menu ul{
    
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;

}
.menu ul li {
    
        float: left;
        padding: 10px;
        margin-left: 20px;
        color: #173242;
        
}

.menu ul li:hover{
    background-color:rgb(8, 90, 49);
}

.menu ul li a, .dropbtn {
    display: inline-block;
    color:rgb(226, 236, 231);
    text-align: center;
    text-decoration: none;
}

.whole{
    margin-top: 100px;
    width: 100%;
    height: 500px;
    
}
body{
    background-image: url("<?php echo base_url('images/im5.jpg'); ?>");
background-size: cover; 

    
}
img{
    opacity:.5;
}


#middle{
        width: 500px;
    height: 300px;
    background-color: #B6CFC0  ;
    border-radius:20px;
    border-top:10px solid #687A6F    ;
    border-bottom:10px solid #687A6F    ;
    box-shadow: 10px 15px 5px #4A564F  ;
    display: block;
    margin-top:100px;
    margin-left:400px;
 }
 
    
    .input1{
        
        margin-left:150px;
        margin-top:30px;
        padding:10px;
        width: 200px;
        text-align: center;
        
    }
    .input2{
        
        margin-left:225px;
        margin-top:30px;
        padding:10px;
        width: 70px;
        text-align: center;
         border-radius:30px;
    }
    #msgg{
        
        margin-left:175px;
    }
</style>

    
</head>
<body>
    <header>
        <div class="headbar">
       
           
            <div class="menu">
                <div class="logo"></div>
                <ul>
                        <li class="dropdown"><a href="<?= base_url('login/home') ;?>">Home</a>
                            </li>
                        <li class="dropdown"><a href="<?= base_url('login/login') ;?>">Login</a></li>
                        <li class="dropdown"><a href="<?= base_url('login/insert') ;?>">Register</a></li>
                       
                      </ul>
            </div>
        </div>
    </header>
    
    
    <div class="whole">
    <div id=middle>

<form method="post">
    
    <input  type="number" name="col1" >
    <input type="text" name="col2" >
    <input type="text" name="col3"  >
    <input type="submit" value="Submit">



</form>
</div>
    
    
    
                   
                    
         </div>
           
    
    
</body>
</html>