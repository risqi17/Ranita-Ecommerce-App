@extends('mart.master')

@section('css-content')

@endsection

@section('content')
<div class="banner-wrapper has_background" style="padding-top: 150px">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Blog</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Blog</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container no-sidebar">
    <!-- POST LAYOUT -->
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12 col-sm-12">
                <div class="blog-grid auto-clear content-post row">
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="{{ url('/blog/single-blog') }}">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">Not your ordinary furniture service.</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-furniture category-life-style tag-light tag-fashion tag-furniture">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">We bring you the best by working</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-furniture tag-life-style post_format-post-format-video">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">We design functional best furniture</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">The child is swimming with a buoy</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion tag-light tag-furniture">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">Furniture hiding beside beige wall</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-180 post type-post status-publish format-standard has-post-thumbnail hentry category-table category-life-style tag-table tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">Table sitting on cliff near body of water</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-177 post type-post status-publish format-gallery has-post-thumbnail hentry category-light category-life-style tag-life-style post_format-post-format-gallery">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">Light in red chair and red headband</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-174 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion category-furniture category-life-style tag-fashion tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">Table riding swing near trees</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-171 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion category-table category-furniture tag-fashion tag-table">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="#">
                                    <img src="{{ asset('mart/images/blogpost1-370x330.jpg') }}"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                                <a class="datebox" href="#">
                                    <span>19</span>
                                    <span>Dec</span>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="#">Table running on grass field</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <nav class="navigation pagination">
                    <div class="nav-links">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js-content')

@endsection