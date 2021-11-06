<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="la la la" />
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='format-detection' content='telephone=no'>
    <title>Prototype 1</title>
    <link rel="stylesheet" href="../lib/bootstrap-4.3.1.min.css">
    <link rel="stylesheet" href="../dist/css/custom.min.css">
    <link rel="stylesheet" href="../dist/css/components.min.css">
</head>

<body>
    <header>
        <h1>BS-JS-SASS jumpstart</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="page-wrap">
        <div class="container">
            <div class="content" id="mostImportant">
                <div>
                    <h3>Make This Responsive</h3>
                </div>
                <ul>
                    <li>Use Flexbox.</li>
                    <li>Implement a sticky footer.</li>
                    <li>Use SASS/SCSS to produce your css files. </li>
                    <li>Create a js function to cycle through primary image.</li>
                    <li>Use inline js to change secondary story images.</li>
                    <li>Make the navbar stick to the top on scrolling.</li>
                    <li>Put your project on <a href="https://github.com/zom-b-food/scss-template" target="_blank">
                            GitHub
                        </a>.</li>
                </ul>
                <article class="main-story">
                    <div id="rotating-item-wrapper">
                        <img src="../dist/img/01.jpg" alt="Placeholder Image" class="img-fluid rotating-item" />
                        <img src="../dist/img/02.jpg" alt="Placeholder Image" class="img-fluid rotating-item" />
                        <img src="../dist/img/03.jpg" alt="Placeholder Image" class="img-fluid rotating-item" />
                        <img src="../dist/img/04.jpg" alt="Placeholder Image" class="img-fluid rotating-item" />
                        <div class="story-intro">
                            <h2>Most Important Story</h2>
                            <p>This article has the most visual weight. <a href="#">Find out more
                                    here</a>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- Marketing Icons Section -->
                <section class="sub-stories">
                    <div class="row">
                        <div class="col-lg-4 mb-2">
                            <article class="sub-story">
                                <img src="../dist/img/a.jpg" class="img-fluid" onclick="this.src='../dist/img/i.jpg'" />
                                <div class="story-intro">
                                    <h4>Less Important Story 1</h4>
                                    <p>This story has less visual weight.</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4" mb-2>
                            <article class="sub-story">
                                <img src="../dist/img/g.jpg" class="img-fluid" onclick="this.src='../dist/img/c.jpg'" />
                                <div class="story-intro">
                                    <h4>Less Important Story 2</h4>
                                    <p>This story has less visual weight.</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <article class="sub-story last">
                                <img src="../dist/img/e.jpg" class="img-fluid" onclick="this.src='../dist/img/l.jpg'" />
                                <div class="story-intro">
                                    <h4>Less Important Story 3</h4>
                                    <p>This story has less visual weight.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
                <h2>
                    READme
                </h2>
                <p>
                    The "Most Important Story" div will trigger a function that randomly changes the images. My
                    array only contains three images, but you get the idea. I wanted to demonstrate that I know how
                    to write an array and click through items in that array.
                </p>
                <p>
                    The three Less Important stories use an inline onclick to advance to another random image. I
                    wanted to demonstrate that I can use js inline when warranted.
                </p>
                <p>
                    On mobile, I lightened the background opacity of the main-story class header since it obscured
                    the image.
                </p>
                <p>
                    The black text in the Sticky Header is hidden when the image is dark, so I added a subtle
                    gradient so you can read it against a dark background. It's virtually unnoticable on a light
                    background.
                </p>
                <p>
                    The "Find out More Here" link opens in a new window, which is the better approach for this
                    assignment.
                </p>

                <a href="#mostImportant">Back to top</a>
            </div>

        </div>
    </div>
    <footer class="footer">
        footer
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script src="../lib/bootstrap-4.3.1.min.js"></script>
<script src="../lib/popper.min.js"></script>
<script src="../dist/js/custom.min.js"></script>

</html>