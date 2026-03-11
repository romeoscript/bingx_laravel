@extends('layouts.spacedcustomlayout')

@section('body')
<div class="overlay2">
</div>
<div class="text">
<h1>
     Blog
    </h1>
</div>
</section>
<section id="blog-content">
<div class="container">
<div class="row">
<div class="col-md-8">
<h4>
<small>
        BLOG POSTS
       </small>
</h4>
<a class="fx-widget" data-base-url="https://www.fxempire.com" data-category="news" data-height="855" data-intro-font-size="16" data-lang="en" data-post-date-color="#999" data-post-description-color="#101010" data-post-title-color="#2318ed" data-section="all" data-show-date="" data-show-image="" data-title-font-size="18" data-url="//www.fxempire.com" data-widget="newsfeed" data-widget-bg-color="#FFF" data-width="650" href="https://www.fxempire.com/" rel="nofollow" style="font-family:Helvetica;font-size:16px;line-height:1.5;text-decoration:none;">
<span style="color:#999999;display:inline-block;margin-top:10px;font-size:12px;">
        Powered By
       </span>
<img alt="FX Empire logo" src="https://www.fxempire.com/logo-full.svg" style="width:87px; height:14px;"/>
</a>
<script async="" charset="utf-8" src="../widgets.fxempire.com/widget.html">
</script>
</div>
<div class="col-md-4">
<div class="trending">
<h3>
        TRENDING
       </h3>
<!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here -->
<script src="../www.24-7pressrelease.com/247pr-news-widgetb0ec.js?widgettitle=News%20Provided%20by%20Bit%20Crest&amp;categories=106,107,333,334,335,336,489,337,108,300,338,109,110,139,339,171,111,112,340,341,113,342,343,114,344,115,345,319,116,347,348,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=2d57a1&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=13&amp;width=auto&amp;headlinesepstyle=solid&amp;showimages=1&amp;numstories=5&amp;bgcolor=ffffff&amp;urldest=local" type="text/javascript">
</script>
<!-- 24-7 Press Release Newswire Landing Page Widget Code Ends Here -->
</div>
<div class="stocks">
<h3>
        STOCKS
       </h3>
<script src="https://www.cryptohopper.com/widgets/js/script">
</script>
</div>
</div>
</div>
</div>
</section>
<section id="fourth">
<div class="container">
<h2>
     News And Events
    </h2>
<h6>
     Trading Stock Market News
    </h6>
<div class="row mx-auto my-auto">
<div class="carousel slide w-100" data-ride="carousel" id="recipeCarousel">
<div class="carousel-inner w-100" role="listbox">
</div>
<a class="carousel-control-prev w-auto" data-slide="prev" href='{{route("blog")}}' role="button">
<span aria-hidden="true" class="carousel-control-prev-icon bg-dark border border-dark rounded-circle">
</span>
<span class="sr-only">
        Previous
       </span>
</a>
<a class="carousel-control-next w-auto" data-slide="next" href='{{route("blog")}}' role="button">
<span aria-hidden="true" class="carousel-control-next-icon bg-dark border border-dark rounded-circle">
</span>
<span class="sr-only">
        Next
       </span>
</a>
</div>
</div>
</div>
</section>
@endsection
