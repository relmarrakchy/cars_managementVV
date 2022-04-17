<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/sideBar.css">
    <script src="https://kit.fontawesome.com/39383a79c4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>XuRan</title>
</head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="#" class="nav_logo"> 
                        <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name eEduction">XuRan</span>
                    </a>
                    <div class="nav_list"> 
                        {{--active--}}
                        <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a> 
                        <a href="#" class="nav_link"> <i class='bx bxs-cart nav_icon'></i> <span class="nav_name">Articles</span> </a> 
                        <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i><span class="nav_name">Clients</span> </a> 
                        <a href="#" class="nav_link"> <i class='bx bx-store nav_icon'></i> <span class="nav_name">Fournisseurs</span> </a>  
                    </div>
                </div>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="king">
            <div class="prince">
                <div class="part1">
                    <div class="yard1">
                        <div class="filter">

                        </div>
                        <br>
                        <div class="myData">
    
                        </div>
                    </div>
                </div>

                <div class="part2">
                    <div class="yard2">
                        <div id="tsum-tabs">
                            <main>
                                <input id="tab1" type="radio" name="tabs" checked>
                                <label for="tab1">Ajout</label>
                                
                                <input id="tab2" type="radio" name="tabs">
                                <label for="tab2">Gestion</label>
                                
                                <section id="content1">
                                    <div class="myForm">
                                        <form>
                                            <div class="form-group0">
                                                <input  type="text" class="form-control" placeholder="Code">
                                                <input  type="text" class="form-control" placeholder="Designation">
                                            </div>
                                            <div class="form-groupSelect">
                                                <select class="form-select" aria-label="Default select example" placeholder="text">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-groupPrice">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.V.">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.A.">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.V.">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.A.">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </form>
                                    </div>
                                </section>
                                
                                <section id="content2">
                                    <div class="myForm">
                                        <form>
                                            <div class="form-group0">
                                              <input  type="text" class="form-control" placeholder="Code">
                                              <input  type="text" class="form-control" placeholder="Designation">
                                            </div>
                                            <div class="form-groupSelect">
                                                <select class="form-select" aria-label="Default select example" placeholder="text">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-groupPrice">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.V.">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.A.">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.V.">
                                                <input  type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.A.">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                            <button class="btn btn-primary">Annuler</button>
                                        </form>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Container Main end-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="/js/sideBar.js"></script>
    </body>
</html>