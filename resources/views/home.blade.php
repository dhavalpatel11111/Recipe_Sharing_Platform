@extends('layouts.app')

@section('content')
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
@endsection