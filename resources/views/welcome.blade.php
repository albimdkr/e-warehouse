<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome | E-Warehouse</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        {{-- CSS: SB Admin --}}
        <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <style>
            body {
                font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-weight: 400;
            }
        </style>

    </head>
    <body class="antialiased">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">E-WAREHOUSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('login') }}">Login</a>
                    </li>
                </div>
            </div>
        </nav>


        {{-- Hero --}}
        <div class="container py-8 mt-4">
            <div class="row flex-lg-row-reverse align-items-center g-5">
                <div class="col-10 mx-auto col-sm-8 col-lg-6">
                    <img class="img-fluid" src="{{ asset('admin_assets/img/undraw_logistics.svg') }}" width="" height="783" srcset="" sizes="" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h5 class="display-5 fw-bold">E-Warehouse <span class="text-primary">Management App</span></h5>
                        </div>
                    </div>
    
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <p class="lead paragraf">Simplicity & Efficiently Manage Your Warehouse</p>
                        </div>
                    </div>
    
                    <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start"><a class="btn btn-primary px-4 me-md-2" href="login.php" role="button">Login</a>
                        <a class="btn btn-outline-secondary px-4" href="#about" role="button">About</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hero --}}
        {{-- <div class="container-fluid px-4 py-5 my-5 text-center">
            <div class="lc-block mb-4">
                <div editable="rich">
                    <h2 class="display-2 fw-bold">Warehouse <span class="text-primary">Management App</span></h2>
                </div>
            </div>
            <div class="lc-block col-lg-6 mx-auto mb-5">
                <div editable="rich">
    
                    <p class="lead">Simplicity & Efficiently Manage Your Warehouse</p>
                </div>
            </div>
    
            <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"> <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('register') }}" role="button">Register</a>
                <a class="btn btn-outline-secondary btn-lg px-4" href="#about" role="button">About</a>
            </div>
            <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center">
                <img class="img-fluid" src="{{ asset('admin_assets/img/undraw_logistics.svg') }}" width="" height="783" srcset="" sizes="" alt="">
            </div>
        </div> --}}

        {{-- Quotes --}}
        <div class="mt-5">
            <figure class="text-center">
                <blockquote class="blockquote">
                  <h3>Simplicity is about subtracting the obvious and adding the meaningful.</h3>
                </blockquote>
                <figcaption class="blockquote-footer" style="font-size:1.5em;">
                    John Maeda<cite title="Source Title"></cite>
                </figcaption>
            </figure>

        </div>

        {{-- About --}}
        <div class="container py-6 py-5" id="about">
            <div class="row">
                <div class="me-xl-auto col-xl-5">
                    <div class="lc-block mb-4">
                        <div editable="rich">
    
                            <h2 class="display-5 fw-bold">About</h2>
                        </div>
                    </div>
                </div>
                <div class="mx-auto col-xl-6">
                    <div class="lc-block d-sm-flex align-items-center mb-4">
                        <div class="lc-block rounded-circle d-flex justify-content-center align-items-center me-sm-3 mb-3 mb-sm-0  bg-light flex-shrink-0" style="width:64px;height:64px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" style="" lc-helper="svg-icon" class="text-primary" width="1.5em" height="1.5em">
                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-7.839 9.166v.522c0 .256-.039.47-.117.641a.861.861 0 0 1-.322.387.877.877 0 0 1-.469.126.883.883 0 0 1-.471-.126.868.868 0 0 1-.32-.386 1.55 1.55 0 0 1-.117-.642v-.522c0-.257.04-.471.117-.641a.868.868 0 0 1 .32-.387.868.868 0 0 1 .471-.129c.176 0 .332.043.469.13a.861.861 0 0 1 .322.386c.078.17.117.384.117.641Zm.803.519v-.513c0-.377-.068-.7-.205-.972a1.46 1.46 0 0 0-.589-.63c-.254-.147-.56-.22-.917-.22-.355 0-.662.073-.92.22a1.441 1.441 0 0 0-.589.627c-.136.271-.205.596-.205.975v.513c0 .375.069.7.205.973.137.271.333.48.59.627.257.144.564.216.92.216.357 0 .662-.072.916-.216.256-.147.452-.356.59-.627.136-.274.204-.598.204-.973ZM0 11.926v4h1.459c.402 0 .735-.08.999-.238a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.59-.68c-.263-.156-.598-.234-1.004-.234H0Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.141 1.141 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082H.79V12.57Zm7.422.483a1.732 1.732 0 0 0-.103.633v.495c0 .246.034.455.103.627a.834.834 0 0 0 .298.393.845.845 0 0 0 .478.131.868.868 0 0 0 .401-.088.699.699 0 0 0 .273-.248.8.8 0 0 0 .117-.364h.765v.076a1.268 1.268 0 0 1-.226.674c-.137.194-.32.345-.55.454a1.81 1.81 0 0 1-.786.164c-.36 0-.664-.072-.914-.216a1.424 1.424 0 0 1-.571-.627c-.13-.272-.194-.597-.194-.976v-.498c0-.379.066-.705.197-.978.13-.274.321-.485.571-.633.252-.149.556-.223.911-.223.219 0 .421.032.607.097.187.062.35.153.489.272a1.326 1.326 0 0 1 .466.964v.073H9.78a.85.85 0 0 0-.12-.38.7.7 0 0 0-.273-.261.802.802 0 0 0-.398-.097.814.814 0 0 0-.475.138.868.868 0 0 0-.301.398Z"></path>
                            </svg>
    
                        </div>
                        <div class="flex-grow-1" editable="rich">
    
    
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aut at reiciendis commodi sapiente minima similique, ab nostrum ratione aperiam eum.</p>
                        </div>
                    </div>
                    <div class="lc-block d-sm-flex align-items-center mb-4">
                        <div class="lc-block rounded-circle d-flex justify-content-center align-items-center me-sm-3 mb-3 mb-sm-0  bg-light flex-shrink-0" style="width:64px;height:64px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="text-success" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M5 2V0H0v5h2v6H0v5h5v-2h6v2h5v-5h-2V5h2V0h-5v2H5zm6 1v2h2v6h-2v2H5v-2H3V5h2V3h6zm1-2h3v3h-3V1zm3 11v3h-3v-3h3zM4 15H1v-3h3v3zM1 4V1h3v3H1z"></path>
                            </svg>
    
                        </div>
                        <div class="flex-grow-1" editable="rich">
    
    
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aut at reiciendis commodi sapiente minima similique, ab nostrum ratione aperiam eum.</p>
                        </div>
                    </div>
                    <div class="lc-block d-sm-flex align-items-center">
                        <div class="lc-block rounded-circle d-flex justify-content-center align-items-center me-sm-3 mb-3 mb-sm-0  bg-light flex-shrink-0" style="width:64px;height:64px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="text-danger" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                            </svg>
    
                        </div>
                        <div class="flex-grow-1" editable="rich">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aut at reiciendis commodi sapiente minima similique, ab nostrum ratione aperiam eum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pricing --}}
        <div class="container pb-5 py-5" id="pricing">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="lc-block mb-4"><span editable="inline" class="small mt-4 d-block"></span>
                        <h2 class="display-5 fw-bold">Pricing</h2>
                    </div><!-- /lc-block -->
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col-lg-4 col-md-6 text-dark my-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="my-0 " editable="inline">Free Trial 1 Mounth</h4>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"><span class="display-6" editable="inline"><b>IDR 0</b></span><span editable="inline" class="lead">/mo</span></h6>
                            <div class="card-text my-4 lc-block">
                                <div editable="rich">
                                    <ul class="list-unstyled">
                                        <li editable="inline">2 Multiple Accounts Users</li>
                                        <li editable="inline">1 Features</li>
                                        <li editable="inline">Help center access</li>
                                    </ul>
    
                                </div>
                            </div>
                            <div class="d-grid lc-block">
                                <a href="{{ route('register') }}" class="btn btn-lg btn-outline-primary">Sign up for free</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-dark my-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="my-0" editable="inline">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"><span class="display-6" editable="inline"><b>IDR 550.00</b></span><span editable="inline" class="lead">/mo</span></h6>
                            <div class="card-text my-4 lc-block">
                                <div editable="rich">
                                    <ul class="list-unstyled">
                                        <li editable="inline">4 Multiple Accounts Users</li>
                                        <li editable="inline">2 Features</li>
                                        <li editable="inline">Help center access</li>
                                    </ul>
    
                                </div>
                            </div>
                            <div class="d-grid lc-block">
                                <a href="#" class="btn btn-lg btn-primary">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-dark my-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="my-0" editable="inline">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"><span class="display-6" editable="inline"><b>IDR 1.500.000</b></span><span editable="inline" class="lead">/mo</span></h6>
                            <div class="card-text my-4 lc-block">
                                <div editable="rich">
                                    <ul class="list-unstyled">
                                        <li editable="inline">7 Multiple Accounts Users</li>
                                        <li editable="inline">5 Features</li>
                                        <li editable="inline">Help center access 24/7</li>
                                    </ul>
    
                                </div>
                            </div>
                            <div class="d-grid lc-block">
                                <a href="#" class="btn btn-lg btn-primary">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact --}}
        <div class="container py-5" id="contact">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="lc-block mb-4"><span editable="inline" class="small mt-4 d-block"></span>
                        <h2 class="display-5 fw-bold">Contact</h2>
                    </div><!-- /lc-block -->
                </div>
            </div>
            <div class="row min-vh-25 align-items-center text-center">
                <div class="col-xl-4 mb-5 mb-xl-0">
                    <div class="lc-block">
                        <div class="d-inline-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" viewBox="0 0 16 16" lc-helper="svg-icon">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                </svg>
                            </div>
    
                            <div class="ms-3 align-self-center" editable="rich">
                                <p class="lead">+62 8901-773-4045</p>
                            </div>
                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
                <div class="col-xl-4 mb-5 mb-xl-0">
                    <div class="lc-block">
                        <div class="d-inline-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="2em" height="2em" viewBox="0 0 24 24" style="" lc-helper="svg-icon" fill="currentColor">
                                    <path d="M12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5M12,2A7,7 0 0,1 19,9C19,14.25 12,22 12,22C12,22 5,14.25 5,9A7,7 0 0,1 12,2M12,4A5,5 0 0,0 7,9C7,10 7,12 12,18.71C17,12 17,10 17,9A5,5 0 0,0 12,4Z"></path>
                                </svg>
                            </div>
    
                            <div class="ms-3 align-self-center" editable="rich">
                                <p class="lead">West Java, Bandung.</p>
                            </div>
                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
                <div class="col-xl-4 mb-5 mb-xl-0">
                    <div class="lc-block">
                        <div class="d-inline-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="2em" height="2em" viewBox="0 0 24 24" style="" lc-helper="svg-icon" fill="currentColor">
                                    <path d="M13 17H17V14L22 18.5L17 23V20H13V17M20 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H11V18H4V8L12 13L20 8V14H22V6A2 2 0 0 0 20 4M12 11L4 6H20Z"></path>
                                </svg>
                            </div>
    
                            <div class="ms-3 align-self-center" editable="rich">
                                <p class="lead">bussiness@ewarehouse.com</p>
                            </div>
                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
            </div>
        </div>
    
        {{-- Footer --}}
        <section>
            <div class="container py-6">
                <div class="lc-block d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4">
                        <div editable="rich">
                            <p class="text-muted"> © 2024 E-Warehouse, Inc</p>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 navbar-expand-md">
                        <div lc-helper="shortcode" class="live-shortcode">
                            <ul id="menu-menu-1" class="flex-wrap justify-content-end">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-32739"><a href="https://library.livecanvas.com/starters" class="nav-link ">BS5 Page Templates</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-32738"><a href="https://library.livecanvas.com/sections/" class="nav-link ">BS5 Snippets</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>