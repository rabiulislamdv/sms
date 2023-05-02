@extends('master.front.master')

@section('title')

@endsection

@section('body')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="carousel " data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card card-body">
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                            <hr>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi at atque debitis delectus ducimus eius, est et eum explicabo fugiat in nobis quas reiciendis
                                reprehenderit sed tenetur voluptate.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi at atque debitis delectus ducimus eius, est et eum explicabo fugiat in nobis quas reiciendis
                                reprehenderit sed tenetur voluptate.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                            <hr>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi at atque debitis delectus ducimus eius, est et eum explicabo fugiat in nobis quas reiciendis
                                reprehenderit sed tenetur voluptate.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi at atque debitis delectus ducimus eius, est et eum explicabo fugiat in nobis quas reiciendis
                                reprehenderit sed tenetur voluptate.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                            <hr>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi at atque debitis delectus ducimus eius, est et eum explicabo fugiat in nobis quas reiciendis
                                reprehenderit sed tenetur voluptate.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi at atque debitis delectus ducimus eius, est et eum explicabo fugiat in nobis quas reiciendis
                                reprehenderit sed tenetur voluptate.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('/img/1.jpg')}}" class="img-fluid rounded-start h-100 w-100"  alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <figure class="text-center">
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success"> Read More</a>
                                    <a href="" class="btn btn-outline-info float-end"> Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('/img/2.jpg')}}" class="img-fluid rounded-start h-100 w-100"  alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <figure class="text-center">
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success"> Read More</a>
                                    <a href="" class="btn btn-outline-info float-end"> Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('/img/3.jpg')}}" class="img-fluid rounded-start h-100 w-100"  alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <figure class="text-center">
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success"> Read More</a>
                                    <a href="" class="btn btn-outline-info float-end"> Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('/img/4.jpg')}}" class="img-fluid rounded-start h-100 w-100"  alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <figure class="text-center">
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature One</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success"> Read More</a>
                                    <a href="" class="btn btn-outline-info float-end"> Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-9">
                                <input type="text"  class="form-control" placeholder="Enter Your Email Hear"/>
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-success w-100" value="Subscribe Now"/ >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
