@extends('mart.master')

@section('css-content')

@endsection

@section('content')

<div class="banner-wrapper has_background" style="padding-top: 150px">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Cara Belanja</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="{{ url('/') }}"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Cara Belanja</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="furgan-tabs furgan-tabs-wrapper">
                <ul class="tabs dreaming-tabs" role="tablist">
                    <li class="description_tab active" id="tab-title-description" role="tab"
                        aria-controls="tab-description">
                        <a href="#tab-description">Description</a>
                    </li>
                </ul>
                <div class="furgan-Tabs-panel furgan-Tabs-panel--description panel entry-content furgan-tab"
                     id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                    <h2>Description</h2>
                    <div class="container-table">
                        <div class="container-cell">
                            <h2 class="az_custom_heading">Platea viverra aenean<br>dictumst</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit
                                scelerisque integer, quam dapibus per risus donec semper
                                vulputate interdum, imperdiet mus rhoncus commodo ultricies
                                class urna tincidunt. Imperdiet vitae lacus etiam metus ut nisl
                                curae, conubia enim scelerisque quis facilisis torquent,
                                ultricies orci faucibus dictumst mauris curabitur. Massa risus
                                nec sociosqu fames montes accumsan iaculis justo turpis
                                luctus</p>
                        </div>
                        <div class="container-cell">
                            <div class="az_single_image-wrapper az_box_border_grey">
                                <img src="{{ asset('mart/images/single-pro1.jpg') }}"
                                     class="az_single_image-img attachment-full" alt="img"></div>
                        </div>
                    </div>
                    <div class="container-table">
                        <div class="container-cell">
                            <div class="az_single_image-wrapper az_box_border_grey">
                                <img src="{{ asset('mart/images/single-pro1.jpg') }}"
                                    class="az_single_image-img attachment-full" alt="img"></div>
                        </div>
                        <div class="container-cell">
                            <h2 class="az_custom_heading">
                                Potenti praesent molestie<br>
                                at viverra</h2>
                            <p>This generator uses a dictionary of Latin words to construct
                                passages of Lorem Ipsum text that meet your desired length. The
                                sentence and paragraph durations and punctuation dispersal are
                                calculated using Gaussian distribution, based on statistical
                                analysis of real world texts. This ensures that the generated
                                Lorem Ipsum text is unique, free of repetition and also
                                resembles readable text as much as possible.</p>
                        </div>
                    </div>
                    <div class="container-table">
                        <div class="container-cell">
                            <h2 class="az_custom_heading">Platea viverra aenean<br>dictumst</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit
                                scelerisque integer, quam dapibus per risus donec semper
                                vulputate interdum, imperdiet mus rhoncus commodo ultricies
                                class urna tincidunt. Imperdiet vitae lacus etiam metus ut nisl
                                curae, conubia enim scelerisque quis facilisis torquent,
                                ultricies orci faucibus dictumst mauris curabitur. Massa risus
                                nec sociosqu fames montes accumsan iaculis justo turpis
                                luctus</p>
                        </div>
                        <div class="container-cell">
                            <div class="az_single_image-wrapper az_box_border_grey">
                                <img src="{{ asset('mart/images/single-pro1.jpg') }}"
                                     class="az_single_image-img attachment-full" alt="img"></div>
                        </div>
                    </div>
                    <div class="container-table">
                        <div class="container-cell">
                            <div class="az_single_image-wrapper az_box_border_grey">
                                <img src="{{ asset('mart/images/single-pro1.jpg') }}"
                                    class="az_single_image-img attachment-full" alt="img"></div>
                        </div>
                        <div class="container-cell">
                            <h2 class="az_custom_heading">
                                Potenti praesent molestie<br>
                                at viverra</h2>
                            <p>This generator uses a dictionary of Latin words to construct
                                passages of Lorem Ipsum text that meet your desired length. The
                                sentence and paragraph durations and punctuation dispersal are
                                calculated using Gaussian distribution, based on statistical
                                analysis of real world texts. This ensures that the generated
                                Lorem Ipsum text is unique, free of repetition and also
                                resembles readable text as much as possible.</p>
                        </div>
                    </div>
                </div>
                <div class="furgan-Tabs-panel furgan-Tabs-panel--additional_information panel entry-content furgan-tab"
                     id="tab-additional_information" role="tabpanel"
                     aria-labelledby="tab-title-additional_information">
                    <h2>Additional information</h2>
                    <table class="shop_attributes">
                        <tbody>
                        <tr>
                            <th>Color</th>
                            <td><p>Blue, Pink, Red, Yellow</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="furgan-Tabs-panel furgan-Tabs-panel--reviews panel entry-content furgan-tab"
                     id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                    <div id="reviews" class="furgan-Reviews">
                        <div id="comments">
                            <h2 class="furgan-Reviews-title">Reviews</h2>
                            <p class="furgan-noreviews">There are no reviews yet.</p>
                        </div>
                        <div id="review_form_wrapper">
                            <div id="review_form">
                                <div id="respond" class="comment-respond">
                                    <span id="reply-title" class="comment-reply-title">Be the first to review “T-shirt with skirt”</span>
                                    <form id="commentform" class="comment-form">
                                        <p class="comment-notes"><span id="email-notes">Your email adchair will not be published.</span>
                                            Required fields are marked <span class="required">*</span></p>
                                        <p class="comment-form-author">
                                            <label for="author">Name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input id="author" name="author" value="" size="30" required=""
                                                   type="text"></p>
                                        <p class="comment-form-email"><label for="email">Email&nbsp;
                                            <span class="required">*</span></label>
                                            <input id="email" name="email" value="" size="30" required=""
                                                   type="email"></p>
                                        <div class="comment-form-rating"><label for="rating">Your rating</label>
                                            <p class="stars">
                                                <span>
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                                </span>
                                            </p>
                                            <select title="product_cat" name="rating" id="rating" required=""
                                                    style="display: none;">
                                                <option value="">Rate…</option>
                                                <option value="5">Perfect</option>
                                                <option value="4">Good</option>
                                                <option value="3">Average</option>
                                                <option value="2">Not that bad</option>
                                                <option value="1">Very poor</option>
                                            </select></div>
                                        <p class="comment-form-comment"><label for="comment">Your
                                            review&nbsp;<span class="required">*</span></label><textarea
                                                id="comment" name="comment" cols="45" rows="8"
                                                required=""></textarea></p><input name="wpml_language_code"
                                                                                  value="en" type="hidden">
                                        <p class="form-submit"><input name="submit" id="submit" class="submit"
                                                                      value="Submit" type="submit"> <input
                                                name="comment_post_ID" value="27" id="comment_post_ID"
                                                type="hidden">
                                            <input name="comment_parent" id="comment_parent" value="0"
                                                   type="hidden">
                                        </p></form>
                                </div><!-- #respond -->
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection

@section('js-content')

@endsection