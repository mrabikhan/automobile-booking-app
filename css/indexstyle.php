<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
*
{
margin: 0%;
padding: 0%;
box-sizing: border-box;    
}

body
{
height: 2000px;
background-color:rgb(238, 229, 229);
}

.nav
{    
background-color: rgb(233, 1, 1);    
height: 55px;
}

.nav ul
{
display: flex;    
list-style: none;  
justify-content:center;
}

.nav ul li
{    
position: relative;    
text-align: center;    
padding: 14px;
margin-top: 10px;
left: 45px;
font-family: "Poppins", sans-serif;
font-weight: bold;
font-size: 16px;
word-spacing: 2px;
}

.nav ul li a
{    
text-decoration: none;
color: whitesmoke;    
}

.nav ul li a:hover
{
color: lime;
}

.logo
{
background-color: rgb(0, 0, 0);    
height: 80px;
border-bottom:3px solid red;
} 
.logo img
{
position: relative;    
width: 60px;
height: 53px;
top: -215px;
left: 25px;
margin-top: 4.5%;
} 

.logo h1
{
position: absolute; 
left: 130px;
color: white;
top:75px;
font-size:30px;
}
.logo h1 span
{
color: red;    
}

.logo h3
{
position: absolute;    
color:white;
margin-left: 70%;
border: 1px solid red;
padding: 5px;
margin-top: 20px;
}
.logo h3:hover
{
color:lime;
border: 1px solid yellow;
}

.logo a button
{
position: absolute; 
left: 88%;
top: 12%;
background-color:red;
color:white;
border: none;
border-radius: 15px;
width: 120px;
height: 35px;
font-size: 16px;
font-weight: bold;
}

.logo a button:hover
{
background-color: white;
color: red;    
box-shadow: 2px 2px 4px 2px lime;
}

.logo img:hover
{
    box-shadow: 2px 2px 2px 4px lime;
}

.coverslider
{
margin-top: 65px;    
width: 1350px;
height: 780px;
overflow: hidden;   
position: absolute;
background-image: url("cssimages/c4.jpg");
background-size: cover;
animation:slider 12s infinite linear;
}

@keyframes slider
{
   0%
   {
    background-image: url("cssimages/c2.jpg");
   }

   30%
   {
    background-image: url("cssimages/c3.jpg");
   }

   60%
   {
    background-image: url("cssimages/c1.jpg");
   }
    
   100%
   {
   background-image: url("cssimages/c4.jpg");    
   }
}

.coverslider button
{
background-color: #8c2586;  
width: 170px;
height: 43px;
border-radius:40px ;  
margin-left: 35px;
margin-top: 80px;
}

.coverslider button a
{
font-size: 18px; 
font-weight: bolder;   
text-decoration: none;
color: white;    
}

.coverslider button:hover
{
background-color: darkblue;    
}

.box1
{        
background-color: rgb(27, 27, 27);    
margin-left: 30px;
margin-top: 200px;
width: 38%;
height: 220px;
color: white;
padding: 10px;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.box1 input:first-child
{
height: 30px;
width: 37%;    
}

.box1 input:last-child
{
color: white;
background-color: red;
border: none;
width: 80px;
height: 35px;
font-size: 15px;
font-weight: bolder;
}

.box1 input:last-child:hover
{
background-color: blue;
cursor: pointer;    
}

.box1 h1
{
width: 0ch;    
overflow: hidden;
border-right: 2px solid purple;
white-space: nowrap;    
animation: text 8s infinite;
}

@keyframes text
{
0%
{
width:0ch;
}  
50%
{
width:23ch;
}  
}

.box2
{
position: absolute;    
width: 100%;
height: 400px;
border: 3px solid black;
background-color: rgb(27, 27, 27);
top: 130%;
}

.box2 img
{
width: 450px;
height: 280px;    
margin-left: 20px;
margin-top: 30px;    
}

.box2 h2
{
margin-left: 12%;
margin-top: 15px;
color: white;    
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}

.box2 h4
{
margin-top: -18%;    
margin-left: 38%;
color: white;    
font-weight: bolder;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.box2 p
{
margin-left: 38%;
color: white;    
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.box2 h5
{
margin-left: 38%;
color:white;
text-decoration: underline red;    
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.box2 button
{
margin-left: 38%;    
background-color: rgb(27, 27, 27);    
border: 1px solid purple;
width: 90px;
height: 30px;
padding: 5px;
}

.box2 button a
{
text-decoration: none;
color: white;    
}

.box2 button a:hover
{
color: skyblue;    
}

.box3
{
width: 100%;
height: 140px;    
background-color: rgb(61, 50, 50);    
position: absolute;
top:192%    
}

.box3 p
{
margin-top: -55px;
margin-left: 35px;    
color: white;
font-family: "Poppins", sans-serif;    
}
.box3 h2
{
margin-left: 35px;    
color: white;    
font-family: "Poppins", sans-serif;    
}

.box3 button
{       
margin-top: 3%;     
margin-left: 85%;
background-color: #8c2586;
width: 175px;
height: 75px;
border:none;  
border-radius: 5px;  
}

.box3 button a
{
text-decoration: none;
color: white;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
font-size: 17px;  
padding: 10px;
}

.box3 button :hover
{      
color:skyblue;
background-color: darkblue;
}

.box4 
{
position: relative;
top: 64%;

}

.box4 img
{
width: 320px;
height: 300px;   
padding: 12px;
margin-left: 10px;
display: flex;
float: right;
}

.box4 h3
{
text-align: center;
font-family: "Poppins", sans-serif;
font-size: 22px;
}


.label h4
{
position: relative;    
color:white;    
background-color: rgb(27, 27, 27);    
display: inline-flex;
padding: 20px;
text-align: center;
font-family: "Poppins", sans-serif;
font-weight: lighter;
margin: 12px;
width: 300px;
left: 40px;
top: -24px;
}

.box4 a img:hover
{    
box-shadow: 5px 10px 20px 10px pink; 
width: 310px; 
height: 300px;  
}

.footer
{  
 
background-color: rgb(27, 27, 27); 
height: 350px;
width: 100%;   
margin-top: 94%;
color: white;
font-family: "Poppins", sans-serif;
}

.footer h3
{
display: inline-flex;    
border-bottom: 2px solid red;    
padding: 8px;
margin: 40px;
width: 230px;
}

.footer p
{
display: inline-flex; 
margin-left: 40px;
font-size: 14px;
}

.footer p:nth-child(2)
{
margin-left: 120px;    
}

.footer p:nth-child(3)
{
margin-left: 140px;    
}

.footer p:nth-child(4)
{
margin-left: 160px;    
}

.footer p:hover
{
    color: #8c2586;        
} 

.copyright
{
color: rgb(190, 174, 174);  
background-color: rgb(48, 42, 42);  
font-family: "Poppins", sans-serif;
height: 60px;

}

.copyright p
{
margin-left: 20px;   
letter-spacing: 1px;
padding: 20px;
}

.social 
{
position: fixed;
top: 30%;
left: 96.5%;
}

.item img
{    
width: 45px;
height: 45px;
border-radius: 10px;
}

.social img:hover
{
   padding:5px
}

.button a
{
position: relative;
display: inline-block;
padding: 15px 30px;
color:#2196f3;
background-color:#8c2586;
letter-spacing: 2px;
text-transform: uppercase;
text-decoration: none;
font-size: 24px;
overflow: hidden;
transition:0.2s;
margin-left: 80%;
margin-top: 100px;
}

.button a:hover
{
color: #255784;
background-color: #2196f3;
box-shadow: 0 0 10px #2196f3,0 0 40px #2196f3,0 0 10px #2196f3;
transition-delay: 1s;
}

.button a span 
{
position: absolute;
display: block;    
}

.button a span:nth-child(1)
{
top: 0;
left: -100%;
width: 100%;
height: 2px;
background: linear-gradient(90deg,transparent, #cdf321);
}

.button a:hover span:nth-child(1)
{
left: 100%;
transition: 1s;
}

.button a span:nth-child(3)
{
bottom: 0;
right: -100%;
width: 100%;
height: 2px;
background: linear-gradient(270deg,transparent, #cdf321);
}

.button a:hover span:nth-child(3)
{
right: 100%;
transition: 1s;
transition-delay: .5s;
}

.button a span:nth-child(2)
{
top: -100% ;
right: 0;
width: 2px;
height: 100%;
background: linear-gradient(180deg,transparent, #cdf321);
}

.button a:hover span:nth-child(2)
{
top: 100%;
transition: 1s;
transition-delay: .25s;
}

.button a span:nth-child(4)
{
bottom: -100%;
left: 0;
width: 2px;
height: 100%;
background: linear-gradient(360deg,transparent, #cdf321);
}

.button a:hover span:nth-child(4)
{
bottom: 100%;
transition: 1s;
transition-delay: .75s;
}
</style>
</head>
</html>  