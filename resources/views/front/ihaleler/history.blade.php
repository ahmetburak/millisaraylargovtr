<?PHP $path = "http://bidiapp.com/millisaraylar.gov.tr1/";?>
<style>
    .koleksiyonlarimaj2 {
        padding-top: 50px;
        text-align: center;
    }
    .koleksiyonlarimaj2>img {

        max-width: 500px;

    }

    #place-map > div.place-map-top {
        top: 1px !important;
    }

    a {
        color: #0d0d0d;
        text-decoration: none;
    }

    a:hover {
        color: #0d0d0d;
        text-decoration: #6d5e4d;
    }


    .bgok1 {

        margin-right: 15px;
        padding-bottom: -20px;
        float: left;
    }



    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: #241E1E;
        cursor: default;
        background-color: #ecd5af;
        border-color: #ecd5af;
    }
    .pagination>li>a, .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #241E1E;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .pagination {
        /* display: inline-block; */
        /* padding-left: 0; */
        /* margin: 20px 0; */
        /* -webkit-border-radius: 4px; */
        /* border-radius: 4px; */
        position: relative;
        margin: auto;
        width: 100%;
    }
    .paginationcontainer {

        width: 100%;
        position: relative;
        margin: auto;
    }


</style>

<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda ">
        İhaleler
    </div><!-- end .page-content-title -->
<br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 "></div>
                        <div class="col-md-8 ">
                            @foreach ($post_contentpages as $post)


                                <div><h4><span class="bgok1">&nbsp;&nbsp;&nbsp;</span>
                                <a href="{{ config("parameters.saray_url") }}ihale/{{ $post->id }}">
                                    {{ $post->title_tr }}
                                </a>
                                </div><br>

                            @endforeach
                        </div>
            <div class="col-md-2 "></div>




        </div>

        <div class="col-md-2 "></div>
        <div class="col-md-8 ">
        <div class="paginationcontainer"> {{ $post_contentpages->links() }}</div>
        </div>
        <div class="col-md-2 "></div>

    </div>


</section>