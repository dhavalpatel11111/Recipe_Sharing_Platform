<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-start align-items-center bg-light" style="padding: 0;">
        <button class="btn btn-primary mt-3 px-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Manu</button>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title " id="offcanvasWithBothOptionsLabel"><?php

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

    <div class="container p-5 mt-5 rounded bg-light">


        <form onsubmit="return false;" method="post" id="addRecipe_form" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="recipename" class="form-label">Recipe Name</label>
                <input type="text" class="form-control" id="recipename" name="recipename">
            </div>
            @csrf
            <input type="hidden" name="hid" id="hid">
            <div class="mb-3">
                <label for="recipe_Ingridiants" class="form-label">Recipe Ingridiants</label>
                <input type="text" class="form-control" id="recipe_Ingridiants" name="recipe_Ingridiants">
            </div>

            <div class="mb-3">
                <label for="guide" class="form-label">Guide</label>
                <textarea class="form-control" id="guide" rows="3" name="guide"></textarea>
            </div>

            <div class="mb-3">
                <label for="how_many_people" class="form-label">For How Many People :</label>
                <input type="number" class="form-control" id="how_many_people" name="how_many_people">
            </div>

            <div class="mb-3">
                <label class="form-label">Authority</label><br>
                <input type="radio" name="authority" id="public" value="public">Public
                <input type="radio" name="authority" id="private" value="private">Private
                <input type="radio" name="authority" id="only_for_followers" value="only_for_followers">Only For Followers
            </div>

            <div class="mb-3">
                <label class="form-label">Recipe Image</label><br>
                <input class="form-control" type="file" name="img" id="img">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>










    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {

            $("#addRecipe_form").submit(function() {

                var formData = new FormData($("#addRecipe_form")[0]);
                $.ajax({
                    url: "/add_recipe",
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(response) {
                        $("#addRecipe_form")[0].reset();
                        // location.href = "/list";
                        alert(response.msg);

                    }
                })

            })


        })
    </script>
</body>

</html>