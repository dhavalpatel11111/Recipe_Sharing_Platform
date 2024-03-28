<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-start align-items-center bg-light" style="padding: 0;">
        <button class="btn btn-primary mt-3 px-5"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Manu</button>
    </div>


    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><?php

                                                                            use Illuminate\Support\Facades\Auth;

                                                                            echo  Auth::user()->name; ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Recipe
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a href="/addRecipeindex" class="btn btn-dark w-100 my-2" id="index">Add Recipe </a>
                            <a href="/recipe_list" class="btn btn-dark w-100 my-2">Your Recipe </a>
                            <button class="btn btn-dark w-100 my-2">Your Populer Recipe </button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Explore
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <button class="btn btn-dark w-100 my-2">Your Followers</button>
                            <button class="btn btn-dark w-100 my-2">Followed By You</button>
                            <a href="/explore_new_people" class="btn btn-dark w-100 my-2">Explore New People</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Buy Recipe
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <button class="btn btn-dark w-100 my-2">Buy From Market</button>
                            <button class="btn btn-dark w-100 my-2">Buy From Whole Market</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            Sell Recipe
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <button class="btn btn-dark w-100 my-2">Sell In Market</button>
                            <button class="btn btn-dark w-100 my-2">Sell In Whole Market</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container bg-dark my-5 p-5">

        <?php


        foreach ($all_recipe_Data as $key => $value) {

        ?>

            <div class="card mb-3" style="max-width: 90%;">

                <div class="row ">
                    <div class="col-md-4" style="height: 300px;">
                        <img src="<?php echo asset('/imgs/' . $value['img']); ?>" class=" rounded-start" alt="..." width="100%" height="300px">

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><strong> Recipe Name: </strong><?php echo $value['recipename']; ?></h5>
                            <p class="card-title"> <strong> Recipe Ingridiants : </strong> <?php echo $value['recipe_Ingridiants']; ?></p>
                            <p class="card-text"><strong> Guide : </strong> <?php echo $value['guide']; ?></p>
                            <p class="card-text"><strong> This ingridiant for <?php echo $value['how_many_people']; ?> Person </strong></p>
                        </div>
                        <div class=" rounded p-3 m-1 w-75">
                            <button class="btn btn-outline-dark">Sell To Followers</button>
                            <button class="btn btn-outline-dark">Sell in Whole Maket</button>

                        </div>
                    </div>
                </div>
            </div>




        <?php
        }
        ?>














    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>