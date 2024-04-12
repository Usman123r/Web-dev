<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointsys</title>
    <!-- CSS link -->
    
    <style>
          *{
        margin: 0;
        padding: 0;
    }


body{
    background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("INS.jpg");
    background-size: 100% auto; /* Width: 100% of the container, Height: Auto */

    
}
.headers{
    min-height: 100vh;
    width: 100%;

}

nav{
    display:flex ;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
    

}
.nav-links{
    flex: 1;
    text-align: right;
    
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
    
}
.nav-links ul li{
    color: white;
    text-decoration: none;
    font-size:12px ;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: white ;
    display: block;
    margin: auto;
    transition: 0.1s;

}
.nav-links ul li:hover::after{
    width: 100%;
}
.text-box{
    width: 90%;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    

}
.text-box h1{
font-size: 62px;
}

.text-box p{
    margin: 10px 0 40px;
    font-size: 14px;
    color: white;

}
.ref{
    display: inline-block;
    text-decoration: none;
    color: whitesmoke;
    border: 1px solid white;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.ref:hover{
border:1px solid green;
background: green;
transition: 1s;
}
.self_registration{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}
.h1{
    font-size:10PX;
}

    

    </style>
</head>
<body>
    <section class="headers">
        <nav>
            <div class="nav-links" > <!-- Corrected the id attribute -->
                
                <ul>
                    
                    <li><a href="exer.html"><span style="color:green">HOME</span></a></li>
                </ul>
            </div>
            
        </nav>

        <div class="text-box">
            <h1 style="text-decoration: underline;">LITERARY LOUNGE</h1>
            <p>Literary Lounge is more than just a place to borrow books; it's a haven for bibliophiles seeking solace in the written word. Our cozy space is where stories come to life, and where readers find refuge in the embrace of their favorite authors. With a diverse collection and a welcoming atmosphere, Literary Lounge invites you to explore new worlds, share in the joy of reading, and become part of a vibrant community of book lovers. Come, relax, and let the pages transport you to places unknown, all within the warm embrace of our Literary Lounge.</p>
            <a href="signup.php" class="signup.php">signup</a>
        </div>
    </section>

<!---course-->
    
</body>
</html>
