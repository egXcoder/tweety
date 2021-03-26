<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tweety</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>
    <div class="container">
        <div class="header mb-4">
            <img src="https://static.wikia.nocookie.net/animaniacs/images/7/79/Tweety.png" class="img-fluid" width="80px">
        </div>
        <div class="row">
            <section id="navigation" class="col-md-3">
                <div class="d-flex flex-column">
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Home</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Explore</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Notifications</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Messages</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Bookmarks</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Lists</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Profile</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">More</a>
                    <button class="btn btn-primary">Tweet-a-roo!</button>
                </div>
            </section>
            <section id="main" class="col-md-6">
                <form action="" method="post">
                    <textarea name="content" class="form-control rounded" cols="30" rows="7">What's up doc?</textarea>
                    <hr>
                    <div>
                        <img class="img-fluid float-left" width="50px"
                            src="https://frspros.com/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg">
                        <button type="button" class="btn btn-primary float-right">Tweet-a-roo!</button>
                    </div>
                </form>

                <div class="posts">
                    <div class="single-post row">
                        <div class="col-md-2">
                            <img class="img-fluid float-left" width="50px"
                                src="https://frspros.com/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg">
                        </div>
                        <div class="col-md-10">
                            <h4>Author Name <sh4an class="text-light">From Time</span> </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, 
                                    laboriosam! Ipsam, alias vel nobis mollitia, excepturi expedita iure tempora 
                                    ullam natus quisquam nemo omnis. Corporis cumque laboriosam nobis sunt asperiores.
                                </p>
                        </div>
                        <hr>
                    </div>
                </div>
            </section>
            <section id="friends" class="col-md-3">
                <div class="bg-light rounded">
                    <h4>Friends</h4>
                    <div class="d-flex flex-column">
                        <div class="d-flex my-1">
                            <img class="img-fluid" width="50px" src="https://frspros.com/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg">
                            <p class="my-auto mx-1">Ahmed Ibrahim</p>
                        </div>
                        <div class="d-flex my-1">
                            <img class="img-fluid" width="50px"
                                src="https://frspros.com/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg">
                            <p class="my-auto mx-1">Ahmed Ibrahim</p>
                        </div>
                        <div class="d-flex my-1">
                            <img class="img-fluid" width="50px"
                                src="https://frspros.com/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg">
                            <p class="my-auto mx-1">Ahmed Ibrahim</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>