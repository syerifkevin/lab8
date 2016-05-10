@extends('master')
@section('content')
<body>
<div class="jumbotron">
    <div class="container">
        <p>&nbsp;</p>
        <h2>Rapid Survey on R&D Disciplines in UPM</h2>
        <p>Deputy Vice Chancellor's Office (Research and Innovation)</p>
        <p><a class="btn btn-primary btn-lg" href="info" role="button">Learn More &raquo;</a></p>
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
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" role="form" method="post" action="http://172.16.61.45/forseo?">
                <fieldset>
                    <input type="hidden" name="_token" value="TRtkjBGVrZ3kCRPt3IKqhsT2df5yJL0rcVmuHOtN">
                    <input type="hidden" name="querystring" id="querystring" class="form-control" value="" />
                    <input type="hidden" name="ip" id="ip" class="form-control" value="172.17.65.124" />
                    <div class="form-group">
                        <label for="staffid" class="col-sm-3 control-label required">Staff ID</label>
                        <div class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto"
                             title="Your UPM staff ID">
                            <input type="text" class="form-control" id="staffid" name="staffid"
                                   placeholder="eg. A05410"
                                   value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label required" data-toggle="tooltip"
                               data-placement="auto"
                               title="Author names that you have used in your publications! Dr Kevin Yap">Author
                            Names</label>
                        <div class="col-sm-9" data-toggle="tooltip" data-placement="top"
                             title="Author names that you have used in your publications.">
                            <input type="text" class="form-control" id="authornames" name="authornames"
                                   placeholder="Dr Kevin Yap"
                                   value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label required">Fields of Research (FOR)</label>
                        <div class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto"
                             title="FORs classify R&D activities according to their scientific and academic
                                 disciplines (see MRDCS 6th Ed. 2011 MOSTI/MASTIC). You may choose more than ONE FOR"
                             value="">
                            <input type="text" class="form-control" id="forarea" name="forarea"
                                   placeholder="Type to search or select from this dropdown list..." />
                        </div>
                    </div>
                    <script>
                        var f = $('#forarea').magicSuggest({
                            value: [],
                            data: 'for.html',
                            placeholder: 'Select...',
                            allowFreeEntries: false,
                            selectionPosition: 'bottom',
                            selectionStacked: true,
                            valueField: 'id',
                            displayField: 'name'
                        });
                        $(f).on('selectionchange', function(e,m){
                            $('[data-toggle="tooltip"]').tooltip('hide');
                        });
                        //f.setData(fdata);
                    </script>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Socio-economic Objectives (SEO)</label>
                        <div class="col-sm-9" placement="top" placeholder="eg. Education, Banking"
                             data-toggle="tooltip" data-placement="auto"
                             title="SEOs categorize R&D activities according to their purposes or benefits to economic,
                                 social, environmental, technological sectors or scientific domain (see MRDCS 6th Ed.
                                 2011 MOSTI/MASTIC). You may choose more than ONE SEO.">
                            <input type="text" class="form-control" id="seo" name="seo"
                                   placeholder="Type to search or select from this dropdown list..." />
                        </div>
                    </div>
                    <script>
                        var s = $('#seo').magicSuggest({
                            data: '/seo.html',
                            placeholder: 'Select...',
                            allowFreeEntries: false,
                            selectionPosition: 'bottom',
                            selectionStacked: true,
                            value: [],
                        });
                        $(s).on('selectionchange', function(e,m){
                            $('[data-toggle="tooltip"]').tooltip('hide');
                        });
                        //s.setData(sdata);
                    </script>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Comments</label>
                        <div class="col-sm-9" placement="top" placeholder="" data-toggle="tooltip"
                             data-placement="auto" title="Your comments are welcome.">
                            <input type="text" class="form-control" id="comments" name="comments" placeholder=""
                                   value=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                            <input type="hidden" name="_token" value="TRtkjBGVrZ3kCRPt3IKqhsT2df5yJL0rcVmuHOtN">
                            <input id="submit" name="submit" type="submit" value="Submit"
                                   class="btn btn-primary">
                            <input id="reset" name="reset" type="reset" value="Clear" class="btn btn-warning">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        tipped = $('[data-toggle="tooltip"]').tooltip();

    });
</script>
<style>
    .required:after {
        content: '*';
        color: red;
        padding-left: 5px;
    }
    .tooltip.in {
        opacity: .8;
        filter: alpha(opacity=80);
    }
</style>
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
</body>
@endsection