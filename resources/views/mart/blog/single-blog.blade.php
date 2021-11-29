@extends('mart.master')

@section('css-content')

@endsection

@section('content')
<div class="banner-wrapper no_background" style="padding-top: 150px">
    <div class="banner-wrapper-inner">
        <div class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item"><a href="#"><span>Blog</span></a></li>
                <li class="trail-item trail-end active"><span>Single Post.</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container no-sidebar">
    <!-- POST LAYOUT -->
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12 col-sm-12">
                <article
                        class="post-item post-single post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                    <div class="single-post-thumb">
                        <div class="post-thumb">
                            <img src="{{ asset('mart/images/blogpost1.jpg') }}"
                                 class="attachment-full size-full wp-post-image" alt="img"></div>
                    </div>
                    <div class="single-post-info">
                        <h2 class="post-title"><a href="#">Not
                            your ordinary baby service.</a></h2>
                        <div class="post-meta">
                            <div class="date">
                                <a href="#">December 19, 2018 </a>
                            </div>
                            <div class="post-author">
                                By:<a href="#"> admin </a>
                            </div>
                        </div>
                    </div>
                    <div class="post-content">
                        <div id="output">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque litora
                                dapibus primis lacinia condimentum non mauris, rutrum duis vitae fringilla vulputate
                                nulla neque. Per convallis pulvinar sem faucibus blandit commodo nec vulputate, class
                                fames accumsan duis eleifend quisque phasellus.</p>
                            <blockquote><p>Arcu dictum odio elementum torquent tincidunt aptent nec convallis massa
                                ultrices, urna nisl eu sollicitudin proin imperdiet curabitur vestibulum dis diam,
                                pretium porttitor lectus senectus parturient sodales purus dapibus porta.</p>
                            </blockquote>
                            <p>Ultricies pretium etiam sapien dictum libero eleifend justo laoreet a, at in scelerisque
                                augue posuere lectus ornare magna penatibus vitae, eu leo molestie lacinia faucibus mi
                                quis viverra. Eleifend suspendisse fermentum pretium nulla taciti laoreet dictumst
                                dignissim vitae, fusce enim nibh cras natoque nam placerat tristique sagittis, lacus
                                pharetra magna non hendrerit imperdiet sollicitudin per.</p>
                        </div>
                        <p>&nbsp;</p>
                        <div id="gallery-1" class="gallery galleryid-195 gallery-columns-2 gallery-size-full">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="#"><img
                                            src="{{ asset('mart/images/blog-gallery-1.jpg') }}"
                                            class="attachment-full size-full" alt="img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="#"><img
                                            src="{{ asset('mart/images/blog-gallery-1.jpg') }}"
                                            class="attachment-full size-full" alt="img"></a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="tags"><a href="#" rel="tag">Light</a>, <a
                            href="#" rel="tag">Life Style</a></div>
                    <div class="post-footer">
                        <div class="furgan-share-socials">
                            <h5 class="social-heading">Share: </h5>
                            <a target="_blank" class="facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" class="googleplus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="categories">
                            <span>Categories: </span>
                            <a href="#">Light</a>,
                            <a href="#">Table</a>,
                            <a href="#">Life Style</a>
                        </div>
                    </div>
                </article>
                <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a comment</h3>
                        <form id="commentform" class="comment-form">
                            <p class="comment-notes"><span
                                    id="email-notes">Your email adchair will not be published.</span> Required fields
                                are marked <span class="required">*</span></p>
                            <p class="comment-reply-content"><input name="author" id="name" class="input-form name"
                                                                    placeholder="Name*" type="text"></p>
                            <p class="comment-reply-content"><input name="email" id="email" class="input-form email"
                                                                    placeholder="Email*" type="text"></p>
                            <p class="comment-form-comment"><textarea class="input-form" id="comment" name="comment"
                                                                      cols="45" rows="6" aria-required="true"
                                                                      placeholder="Enter you comment here..."></textarea>
                            </p><input name="wpml_language_code" value="en" type="hidden">
                            <p class="form-submit"><input name="submit" id="submit" class="submit"
                                                          value="Post a comment" type="submit"></p>
                        </form>
                    </div><!-- #respond -->
                </div><!-- #comments -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('js-content')

@endsection