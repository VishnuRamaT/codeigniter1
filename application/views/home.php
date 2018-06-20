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
    background:  url("<?php echo base_url('images/imm1.jpg'); ?>")  no-repeat center 0;
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
border-bottom: 10px solid rgb(20, 143, 81);
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
    background: rgb(20, 143, 81);
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
    height: auto;
    margin-bottom:300px;
    
    
    
}



p {
    text-indent: 50px;
    text-align: justify;
    letter-spacing: 3px;
    
}

body{
    background:#D3F2DE  ;background-image: url("<?php echo base_url('images/im3.jpg'); ?>");
background-size: cover; 
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

    
    
    <h1>ABOUT US</h1><hr>
    
       <p> Appy Fizz is a sparkling drink that describes itself as 'the champagne of fruit drinks'. The new Appy Fizz website was part of a more extensive rebranding project by NYC-based design firm Sagmeister & Walsh. As the creators explain in their case study, the identity "visualises carbonated bubbles through a dynamic graphic language of 3D spheres and circles."

The design is an interesting mix of super-flat and implied three-dimensional elements. The circular language written in bold red, white and black reminds me of the work of Yayoi Kusama, the world- renowned artist associated with pop art, minimalism and polka dots. 

Art and its space in commercial industries is a theme Sagmeister & Walsh play with throughout their work, and it's interesting to see how this combination translates to the web. Here there are many animations and interactive canvas elements that speak the same visual language – a carbonation simulation even follows the user's mouse around as it is moved across the website.
Appy Fizz is a sparkling drink that describes itself as 'the champagne of fruit drinks'. The new Appy Fizz website was part of a more extensive rebranding project by NYC-based design firm Sagmeister & Walsh. As the creators explain in their case study, the identity "visualises carbonated bubbles through a dynamic graphic language of 3D spheres and circles."

The design is an interesting mix of super-flat and implied three-dimensional elements. The circular language written in bold red, white and black reminds me of the work of Yayoi Kusama, the world- renowned artist associated with pop art, minimalism and polka dots. 





</p>
</div>
           
    
    
</body>
</html>