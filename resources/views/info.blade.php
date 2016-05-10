@extends('master')
@section('content')
<div class="jumbotron">
    <div class="container">
        <p>&nbsp;</p>
        <h2>Rapid Survey on R&D Disciplines in UPM</h2>
        <p>Deputy Vice Chancellor's Office (Research and Innovation)</p>
        <p><a class="btn btn-primary btn-lg" href="mosti" role="button">Take the survey now &raquo;</a></p>
    </div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">A Survey for UPM Academics</a>
        </div>
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6">
            <h2>About this survey</h2>

            <p>The Intell Unit of the <a href="http://www.tncpi.upm.edu.my"> Office of the Deputy Vice Chancellor
                    (Research and Innovation)</a> is conducting a study on the relationship between the UPM
                researchers’ disciplines and their intended socio-economic impacts. Under the <a
                        href="http://mrdcs.mastic.gov.my/">R&D Classification System by MOSTI (2011)</a>,
                “discipline” is classified as “Fields of Research” or (FOR) and socio-economic impact as
                Socio-Economic Objective (SEO). The relationship between FOR and SEO as perceived by the UPM
                researchers, may indicate UPM’s contribution to the society.

            <p><b>Datin Paduka Prof. Dr. Fatimah Mohamed Arshad (DL: <a href="tel:+603-8947 1624">+603-8947 1624</a>)</b>
                <br/><b>Dr. Ng Keng Yap (DL: <a href="tel:+603-8947 1754">+603-8947 1754</a>)</b>
                <br/><b>Miss Sahara (HP: <a href="tel:++60 18-265 7309">+60 18-265 7309</a>)</b>
                <br/>Unit Pintar Penyelidikan (INTELL)
                <br/>Pejabat Timbalan Naib Canselor (Penyelidikan & Inovasi)
                <br/>Universiti Putra Malaysia
                <br/>43400 Serdang, Selangor, Malaysia
            </p>
        </div>
        <div class="col-md-6">
            <h2>MRDCS</h2>

            <p>The <a href="http://mrdcs.mastic.gov.my/">Malaysian Research and Development Classification System
                    (MRDCS)</a> is a set of classifications
                designed for use in the measurement and analysis of research and development (R&D) activities in
                Malaysia.</p>
            <h4>Field of Research</h4>

            <p><em>Field of Research (FOR)</em> represents R&D activities classified according to their
                scientific and academic disciplines. These disciplines tend to be universally
                applicable, with national variations arising from the grouping of different research
                fields.</p>
            <h4>Socio-Economic Objective</h4>

            <p><em>Socio Economic Objective (SEO)</em> allows R&D activities to be categorised
                according to their purposes or presumed sectoral benefits as perceived by the
                researchers. It consists of discrete economical, social, environmental, technological
                or scientific domain for identifying the principal purpose of the R&D. This system
                shows greater national variation according to a nation’s profile and development
                priorities.</p>
            <p><a class="btn btn-default" href="http://mrdcs.mastic.gov.my/" role="button">View details &raquo;</a>
            </p>
        </div>
    </div>
</div>
<hr />
<div class="container">
    <footer>
        <p>&copy; 2016 Universiti Putra Malaysia. All rights reserved.</p>
    </footer>
</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
@endsection
