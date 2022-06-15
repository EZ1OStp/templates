<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            background-color: #e6e6e6;
        }
        .page .sidebar{
            height: 100vh;
            width: 250px;
            background: white;
            top: 0;
            left: 0;
            position: fixed;
            transition: all 0.7s ease;
            /* box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3); */
        }
        .page .content{
            margin-left: 250px;
        }

        body.active .page .sidebar {
            left: -250px;
        }
        body.active .page .content{
            margin-left:0;
            width: 100%;
            transition: all 0.7s ease;
        }
        .sidebar-header{
            padding: 10px 15px;
        }
        .sidebar-logo-container{
            
            display: flex;
            border-radius: 8px;

        }
        .logo-container{
            max-width: 60px;
            
            border-radius: 8px;
            margin: 8px;
            padding: 6px 8px;
        }
        .logo-sidebar{
            width: 100%;
            height: auto;
        }
        .brand-name-container{
            padding: 0px;
            margin: 15px 10px 0px 5px;
        }
        .brand-name{
            color: black;
            line-height: 1rem;
            margin: 0;
            font-size: 16px;
            letter-spacing: 1px;
        }
        .navigation-list{
            list-style-type: none;
            padding: 0px 20px;
            margin-top:30px;
        }
        .navigation-list-item{
            
            padding: 15px 18px 10px 18px;
            border-radius: 8px;
            margin: 15px 0px;
        }
        .navigation-list-item:hover{
            background-color: rgb(0,0,0,0.1);
            box-shadow:0 0 0.4em rgd(0,0,0,0.1);
            color: black;
            
        }
        .navigation-list-item.active{
            background-color: rgb(0,0,0,0.1);
            boc-shadow:0 0 0.4em rgd(0,0,0,0.1);
            cursor: pointer;
        }
        .navigation-link{
            color: rgb(31,40,51,0.8);
            letter-spacing: 1px;
            font-family: "Roboto",sans-serif;
            font-weight: 400;
            font-size: 16px;
            text-decoration: none;
        }
        .navigation-link:hover{
            color: black;
        }
        .navigation-list-item:hover .navigation-link{
            color: black;
            transform: scale(0.7);
        }
        .navigation-list-item.active .navigation-link{
            color: rgb(255, 255, 255,0.8);
            font-weight: 600;
        }
        .navigation-link i{
            font-size: 20px;
        }

        .navigationBar{
            background-color: #fff;
            height: 50px;
            padding: 38px 0px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 2px -2px #c5c6c7;
            
        }
        .sidebarToggle{
            font-size: 16px;
            margin-left: -50px;
            z-index: 999;
            background: #c5c6c7;
            border-radius: 100px;
            outline: none !important;
            box-shadow: none !important;
            padding: 7px;
        }
        .sidebarToggle:hover{
            color: white;
        }
        .sidebarToggle.active{
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img class="logo-sidebar" src="{{asset('img/images/logo_fmg54Ko.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name">
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item">
                        <a href="" class="navigation-link">
                            <div class="row">
                                <div class="col-2 ">
                                    <i class="fas fa-tachometer-alt mt-1 "></i>
                                </div>
                                <div class="col-10 align-middle">
                                    Dashboard
                                </div>
                            </div>    
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="" class="navigation-link">
                            <div class="row">
                                <div class="col-2 ">
                                    <i class="fa-solid fa-sitemap"></i>
                                </div>
                                <div class="col-10 align-middle">
                                    Organisation
                                </div>
                            </div>    
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="" class="navigation-link">
                            <div class="row">
                                <div class="col-2 ">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <div class="col-10 align-middle">
                                    Facture
                                </div>
                            </div>    
                        </a>
                    </li>
                </ul>
                <hr style="margin-top: 30px;color:black">
            </div>
        </div>
        <div class="content">
            <div class="navigationBar">
                <button id="sidebarToggle" class="btn sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</body>
<script>
    let sidebarToggle = document.querySelector('.sidebarToggle');
    sidebarToggle.addEventListener('click',function(){
        document.querySelector('body').classList.toggle("active");
        document.getElementById('sidebarToggle').classList.toggle("active");
    })
</script>
</html>