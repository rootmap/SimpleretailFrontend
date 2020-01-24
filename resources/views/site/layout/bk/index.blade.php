<!DOCTYPE html>
<html class="wide wow-animation" lang=en>
<head>
  <title>Simple POS Software | Simple Retail POS</title>
  <meta name=format-detection content="telephone=no">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145752783-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-145752783-1');
  </script>

  <script type=application/ld+json>
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "Simple Retail POS",
      "url": "http://simpleretailpos.com/",
      "potentialAction": {
      "@type": "SearchAction",
      "target": "{search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
</script>
<meta name=google-site-verification content=rNbE4a4Pn8QZHopbu3nbtpcEr_bsNpbf1zXYG7KFdzk>
<meta name=viewport content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta charset=utf-8>
<meta name=description content="Looking for a truly integrated POS solution for your business? Our Simple Retail POS offers a real-time dashboard with secure payments and other perks. Call us!">
<meta name=csrf-token content="{{ csrf_token() }}">
<meta name=AddPaypalLinkActionUrlPartial content="{{url('initiate/account/paypal')}}">
<meta name=AddPOSContactSubmitUrl content="{{url('save/contact/query')}}">
<meta name=AddInitiateSingupAcPOSUrl content="{{url('initiate/signup')}}">
<meta name=addAuthrizePaymentURL content="{{url('initiate/account/authorizenet')}}">
<meta name="google-site-verification" content="rNbE4a4Pn8QZHopbu3nbtpcEr_bsNpbf1zXYG7KFdzk" />

@include('site.include.header')
<!--[if lt IE 10]>
<div style="background:#212121;padding:10px 0;box-shadow:3px 3px 5px 0 rgba(0,0,0,.3);clear:both;text-align:center;position:relative;z-index:1"><a href=https://windows.microsoft.com/en-US/internet-explorer/><img src=images/ie8-panel/warning_bar_0000_us.jpg border=0 height=42 width=820 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<script src=js/html5shiv.min.js></script>
<![endif]-->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PRM3ZV7');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145752783-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145752783-1');
</script>


</head>
<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRM3ZV7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!--noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRM3ZV7" height=0 width=0 style=display:none;visibility:hidden></iframe></noscript-->
    <div class=page-loader>
      <div class=brand-name><img src="{{url('upload/site_logo/'.$siteInfo->site_logo)}}" alt=simpleretailpos />
      </div>
      <div class=page-loader-body>
        <div class=cssload-jumping><span></span><span></span><span></span><span></span><span></span></div>
      </div>
    </div>
    <div class=page>
      <header class="section page-header">
        <div class="rd-navbar-wrap novi-background">
          <nav class="rd-navbar rd-navbar-top-panel-lightnav rd-navbar rd-navbar-top-panel-light" data-layout=rd-navbar-fixed data-sm-layout=rd-navbar-fixed data-md-layout=rd-navbar-fixed data-md-device-layout=rd-navbar-fixed data-lg-layout=rd-navbar-fixed data-lg-device-layout=rd-navbar-fixed data-xl-layout=rd-navbar-fullwidth data-xl-device-layout=rd-navbar-fullwidth data-xxl-layout=rd-navbar-fullwidth data-xxl-device-layout=rd-navbar-fullwidth data-lg-stick-up-offset=90px data-xl-stick-up-offset=90px data-xxl-stick-up-offset=90px data-lg-stick-up=true data-xl-stick-up=true data-xxl-stick-up=true data-stick-up-clone=true>
            <div class=rd-navbar-inner>
              <div class=rd-navbar-nav-wrap>
                <ul class=rd-navbar-nav>
                  <li><a href=#join>Join Now</a></li>
                  <li><a href=#features>Features</a></li>
                  <li><a href=#reports>Integrations</a></li>
                  <li><a href=#contactus>Contact us</a></li>
                </ul>
              </div>
              <div class=rd-navbar-panel>
                <button class=rd-navbar-toggle data-rd-navbar-toggle=.rd-navbar-nav-wrap><span></span></button>
                <div class=rd-navbar-brand><a class=brand-name href=javascript:backtoTop()>
                  <img src="{{url('upload/site_logo/'.$siteInfo->site_logo)}}" alt=simpleretailpos /></a></div>
                </div>
                <div class=rd-navbar-top-panel>
                  <div class=rd-navbar-top-panel-toggle data-rd-navbar-toggle=.rd-navbar-top-panel><span></span></div>
                  <div class=rd-navbar-top-panel-content>
                    <a class="btn btn-sm btn-primary btn-effect-ujarak" href=#signup>SIGNUP</a>
                    <a class="btn btn-sm btn-primary btn-effect-ujarak" target=_blank href=http://app.simpleretailpos.com>LOGIN</a>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <style type=text/css>.videoPlayEnroll{background:url('{{url('play/def.png')}}');width:100px;height:98px;display:block}.videoPlayEnroll:hover{background:url('{{url('play/desf.png')}}');width:100px;height:98px;display:block}</style>
        <section class=section>
          <div class="swiper-bg-wrap swiper-style-2">
            <div class="swiper-container swiper-bg swiper-height-1" data-autoplay=6500 data-direction=vertical>
              <div class=swiper-wrapper>
                @if(count($slider)>0)
                @foreach($slider as $sli)
                <div class=swiper-slide style="background:url('{{url('upload/slider/'.$sli->image)}}')">
                  <div class=swiper-slide-caption>
                    <div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
                      {{-- <hr class="divider-sm divider-success" data-caption-animate=fxRotateInLeft data-caption-delay=50> --}}
                      <h1 data-caption-animate=fxRotateInRight data-caption-delay=150>{{$sli->title}}</h1>
                      <p class=subtitle-variant-3 data-caption-animate=fxRotateInLeft data-caption-delay=350>{{$sli->sub_title}}</p>
                      <a class="btn btn-square btn-round ir video videoPlayEnroll" data-caption-animate=fxRotateInRight data-caption-delay=550 href="{{$sli->demo_link}}" style=border:0px><span class style=width:100px;height:98px></span></a>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
              </div>
              <div class=swiper-pagination></div>
            </div>
          </div>
        </section>
        <section class="section wow fadeInUp" id="features" data-type="anchor" data-wow-duration="1s" data-wow-delay="0s" style="visibility:visible;animation-duration:1s;animation-delay:0s;animation-name:fadeInUp;">
          <div class="container w-container w-features">
            <div class=top-wrapper-margin>
              <div class=top-wrapper>
                <h2 class=top-title-2>Features</h2>
              </div>
            </div>
            <div>
              <div class=row>
                @if(count($feature))
                @foreach($feature as $sli)
                <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInDown" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                  <div class=services-wrapper>
                    <div>
                      <img src="{{url('upload/feature/'.$sli->icon_image)}}" width=85 alt=simpleretailpos class=features-icon>
                      <div>
                        <h4 class=features-title>
                          {{$sli->title}}
                          <br>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
              </div>
            </div>
          </div>
        </section>
        

        <div class=clearfix></div>
        <style type=text/css>.blog{padding-top:80px}.normal-post{-webkit-transition:all .25s ease-in-out 0s;-moz-transition:all .25s ease-in-out 0s;-o-transition:all .25s ease-in-out 0s;transition:all .25s ease-in-out 0s;margin-bottom:30px;overflow:hidden;background:#fff;-webkit-box-shadow:0 3px 25px rgba(2,3,3,0.15);-moz-box-shadow:0 3px 25px rgba(2,3,3,0.15);-o-box-shadow:0 3px 25px rgba(2,3,3,0.15);box-shadow:0 3px 25px rgba(2,3,3,0.15)}.normal-post .entry-header{position:relative}.normal-post .entry-header .post-image{position:relative}.normal-post .entry-content{padding:20px;position:relative}.normal-post .entry-content .entry-post-info{padding-bottom:15px;margin-bottom:15px;border-bottom:1px solid #EEE}.normal-post .entry-content .entry-post-info h4{margin:0}.normal-post .entry-content .entry-post-info h4 a{color:#333;text-decoration:none;font-size:16px;font-weight:700;-webkit-transition:all .25s ease-in-out 0s;-moz-transition:all .25s ease-in-out 0s;-o-transition:all .25s ease-in-out 0s;transition:all .25s ease-in-out 0s}.normal-post .entry-content .entry-post-info .posted-on{font-size:14px;margin-bottom:0;color:#FFF;position:absolute;right:25px;top:-50px;height:64px;width:64px;text-align:center;font-weight:bold;text-transform:uppercase;padding:14px 0;line-height:1;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;-webkit-box-shadow:0 3px 15px rgba(2,3,3,0.25);-moz-box-shadow:0 3px 15px rgba(2,3,3,0.25);-o-box-shadow:0 3px 15px rgba(2,3,3,0.25);box-shadow:0 3px 15px rgba(2,3,3,0.25);background:rgba(139,195,74,0.75)!important;background:-webkit-linear-gradient(-45deg,rgba(139,195,74,1) 0,rgba(68,199,244,1) 100%)!important;background:-o-linear-gradient(-45deg,rgba(139,195,74,1) 0,rgba(68,199,244,1) 100%)!important;background:-moz-linear-gradient(-45deg,rgba(139,195,74,1) 0,rgba(68,199,244,1) 100%)!important;background:linear-gradient(-45deg,rgba(139,195,74,1) 0,rgba(68,199,244,1) 100%)!important}.normal-post .entry-content .entry-post-info .posted-on span{display:block;margin-bottom:7px}.normal-post .entry-content .entry-expert p{font-weight:400;margin-bottom:0;font-size:13px;line-height:24px;color:#777}.normal-post .entry-content .entry-expert .post-readMore{overflow:hidden;padding-top:15px}.normal-post .entry-content .entry-expert .post-readMore a{font-size:13px;text-decoration:none;font-weight:700;color:#999;text-transform:uppercase;-webkit-transition:all .2s ease-in-out 0s;-moz-transition:all .2s ease-in-out 0s;-o-transition:all .2s ease-in-out 0s;transition:all .2s ease-in-out 0s}.normal-post .entry-content .entry-expert .post-readMore a i{margin-left:5px}.normal-post .entry-footer{padding:15px 20px 5px;border-top:1px solid #EEE}.section-space-between-40{padding-bottom:40px!important;padding-top:60px!important}</style>
        <section class="section report-header section-bg-img" id="reports" style="padding: 0px;">

          <div class="row"  style="visibility:visible;animation-duration:1s;animation-delay:.1s;animation-name:fadeInRight;background-color:rgba(255,255,255,0.8);box-shadow:0 20px 50px -20px rgba(0,0,0,.5); margin-top: 0px; ">

          <div class="container w-container w-features">
            <div class="top-wrapper-margin">

              <h2 class="top-title-2">Intragted Solutions</h2>
              <br>
            </div>
            <div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="border-right: 1px solid #ccc;border-bottom: 1px solid #ccc;padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="{{url('upload/business-reports/features/1562796728.png')}}" alt="simpleretailpos" class="features-icon" width="120">
                      <div>
                        <h4 class="features-title"> Intregated Business Paypal 
                          <br>
                        </h4>
                        <p class="text-gray">Payments via PayPal, through our interactive customer display allows users to give access to consumers to pay via their PayPal account, or simply user PayPal for credit card processing. Simple Retail POS also gives privileges to the user to send invoices via email for PayPal Payments, and more!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="border-bottom: 1px solid #ccc;padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="{{url('upload/retail_image/authorizenet-logo-png-transparent-2.png')}}" alt="simpleretailpos" class="features-icon" width="150">
                      <div>
                        <h4 class="features-title">Authorizenet Payment Solutions
                          <br>
                        </h4>
                        <p class="text-gray">Credit Card Processing Gateway, via Authorized.net. Giving users the freedom to choose their own credit card processor, and tearing away from being forced to choose a Point of Sales and Processing Company together. Providing users the grace to be free.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="border-right: 1px solid #ccc;padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="{{url('upload/business-reports/features/1562797743.png')}}" alt="simpleretailpos" class="features-icon" width="120">
                      <div>
                        <h4 class="features-title">INTERACTIVE CUSTOMER DISPLAY
                          <br>
                        </h4>
                        <p class="text-gray">Simple Retail POS Interactive Customer Display, provides users the option to allow their customers to pay via PayPal or Credit Card via customer display, while displaying customers transactions on any device with no limitations to the user for device choices.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="{{url('upload/business-reports/features/1562868591.png')}}" alt="simpleretailpos" class="features-icon" width="120">
                      <div>
                        <h4 class="features-title"> STRIPE PAYMENT SOLUTIONS
                          <br>
                        </h4>
                        <p class="text-gray">Stripe builds the most powerful and flexible tools for internet commerce. Whether you’re creating a subscription service, an on-demand marketplace, an e-commerce store, or a crowdfunding platform, Stripe’s meticulously designed APIs and unmatched functionality help you create the best possible product for your users.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

          <div class=clearfix></div>

          {{-- <div class=container>
            <div class=row>
              @if(count($busRep)>0)
              @foreach($busRep as $br)
              <div class=col-sm-3>
                <div>
                  <article class="normal-post wow fadeInRight" data-wow-duration=1s data-wow-delay=0.10s style="visibility:visible;animation-duration:1s;animation-delay:.1s;animation-name:fadeInRight;background-color:rgba(255,255,255,0.8);box-shadow:0 20px 50px -20px rgba(0,0,0,.5);height:500px;border-radius:25px">
                    <figure class=entry-header>
                      <div class=post-image style=text-align:center>
                        <img alt="bKash Limited" src="{{url('upload/business-reports/features/'.$br->icon_image)}}" class=img-responsive style="width:70%;margin:10px auto">
                      </div>
                    </figure>
                    <div class=entry-content style=padding-top:0>
                      <div class=entry-post-info>
                        <h4><a href=#>{{$br->title}}</a></h4>
                      </div>
                      <div class=entry-expert>
                        <p class="text-justify text-dark"></p><p><span style=color:#212529;text-align:justify;font-family:Raleway,sans-serif;font-size:16px>{{$br->detail}}<br></span></p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div> --}}


        </section>

        <div class=clearfix></div>
        <section class="section novi-background bg-cover bg-image section-md bg-gray-light text-center text-md-left" id=retail data-type=anchor>
          <div class=container>
            <div class="row justify-content-md-center flex-md-row-reverse align-items-md-center row-55">
              <div class="col-md-5 wow fadeInLeft" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s;animation-name:fadeInLeft>
                <h2>{{$retail->title}}</h2>
                <p class=text-gray>{{$retail->details}}</p>
              </div>
              <div class="col-md-7 wow fadeInRight" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s;animation-name:fadeInRight>
                <figure class=figure-fullwidth> <img src="{{url('upload/retail_image/'.$retail->image)}}" alt=simpleretailpos width=620 height="465"/>
                </figure>
              </div>
            </div>
          </div>
        </section>
        
        <!-- <section class="section aboutus-header section-md text-center text-md-left" id=about-us data-type=anchor>
          <div class=container>
            <div class="row justify-content-md-center flex-md-row-reverse align-items-md-center row-55">
              <div class="col-md-12 testimonials-wrapper">
                <img src="{{url('upload/about_image/'.$aboutSite->image)}}" alt=simpleretailpos class="wow fadeInDown" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s />
                <br />
                <br />
                <h2 class="wow fadeInDown" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>{{$aboutSite->title}}</h2>
                <p class="text-gray wow fadeInUp" data-wow-duration=1s data-wow-delay=0.10s style=padding-bottom:80px;visibility:visible;animation-duration:1s;animation-delay:.1s>{{$aboutSite->details}}</p>
              </div>
            </div>
          </div>
        </section> -->
        <section class="section novi-background bg-cover bg-image section-md bg-gray-light text-center text-md-left" id="retail" data-type="anchor" >
          <div class="container" style="margin-top: 4px;">
            <div class="top-wrapper-margin">

              <p class="text-gray">Your hunt for a perfect point of sale management system ends here at Simple Retail POS! Simple POS acknowledges the fact that all kinds of businesses regardless of their size or type need a reliable POS system which is proficiently designed by taking into account all the exclusive needs of business ventures. That is the main reason we do not believe in offering mere POS systems but way more than that – we sell all-encompassing management systems which are equally effective for all kinds of retailers.</p>

            </div>
            <div class="row justify-content-md-center align-items-md-center row-55">
              <div class="col-md-6 wow fadeInLeft text-left" data-wow-duration="1s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInLeft;">
                <h2>Powerful Capabilities of Simple Retail POS: </h2>
                <ul style="padding-top:20px;">
                  <li>•	15 comprehensive business management reports</li>
                  <li>•   Cloud technology and mobility</li>
                  <li>•	Full detailed user guide</li>
                  <li>•	PAYPAL integration</li>
                  <li>•	Tutorial videos</li>
                  <li>•	Precise inventory</li>
                  <li>•	Customer CMS with customer leads</li>
                  <li>•	Robust integration</li>
                  <li>•	Event Calendars</li>
                  <li>•	Live customer chat</li>
                </ul>
              </div>
              <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInRight;">
                <figure class="figure-fullwidth"> <img src="https://www.simpleretailpos.com/upload/retail_image/powerful-tab.png" alt="simpleretailpos" width="620" height="465">
                </figure>
              </div>
            </div>
          </div>
        </section>
        <section class="section wow fadeInUp" id="features" data-type="anchor" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
          <div class="container w-container w-features">
            <div class="top-wrapper-margin">

              <h2 class="top-title-2">What Makes Simple Retail POS System Better Than Others?</h2>
              <br>
            </div>
            <div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="border-right: 1px solid #ccc;border-bottom: 1px solid #ccc;padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="https://www.simpleretailpos.com/site/images/paypal-logo.png" alt="simpleretailpos" class="features-icon" width="85">
                      <div>
                        <h4 class="features-title">In-depth Stats and Analytics
                          <br>
                        </h4>
                        <p class="text-gray">We provide a robust analytics and reporting module. The reports generated by our system can save you invaluable time. At the same time empower you with critical business insights which you can utilize to make informed business decisions that are data driven.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="border-bottom: 1px solid #ccc;padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="https://www.simpleretailpos.com/upload/feature/1563476491.png" alt="simpleretailpos" class="features-icon" width="85">
                      <div>
                        <h4 class="features-title">Streamlined Process of Sales
                          <br>
                        </h4>
                        <p class="text-gray">We have integrated all the tools which you may require to streamline the whole lifecycle of sales. Our POS Solutions include everything from order simplified inventory management to order creation to smoothly handle the process of sales and execute swift checkouts.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="border-right: 1px solid #ccc;padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="https://www.simpleretailpos.com/upload/feature/1563476478.png" alt="simpleretailpos" class="features-icon" width="85">
                      <div>
                        <h4 class="features-title">Live Dashboard
                          <br>
                        </h4>
                        <p class="text-gray">Our platform boasts a clean and user friendly interface. It is proficiently designed by keeping in mind the ease of users. There is no clutter at all and every single section is intuitive and easily comprehendible.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <div class="services-wrapper">
                    <div>
                      <img src="https://www.simpleretailpos.com/upload/feature/1563476464.png" alt="simpleretailpos" class="features-icon" width="85">
                      <div>
                        <h4 class="features-title">Customer CMS with Customer Leads
                          <br>
                        </h4>
                        <p class="text-gray">We allow you to store all of your customer related data in one location, get accessibility to the history of customers, import the list of customers, offer them promotional or loyalty discounts and above all follow customer leads.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section novi-background bg-cover bg-image section-md bg-gray-light text-center text-md-left" id="retail" data-type="anchor">
          <div class="container">
            <div class="row justify-content-md-center align-items-md-center row-55">
              <div class="col-md-6 wow fadeInLeft text-left" data-wow-duration="1s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInLeft;">
                <h2>Could Simple Retail POS Boost the Profitability of Your Business?</h2>
                <p class="text-gray">The main goal of our POS system is to integrate all the business activities which eventually decreases waste of time and resources and augments efficiency. For instance, our CRM tool lets you study the buying behavior of your customers which can be instrumental in the creation targeted and personalized marketing campaigns. Our one of a kind CRM and all other tools of Simple POS system can certainly increase the profitability of your business.</p>
              </div>
              <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInRight;">
                <figure class="figure-fullwidth"> <img src="https://www.simpleretailpos.com/upload/retail_image/profit-report.png" alt="simpleretailpos" width="620" height="465">
                </figure>
              </div>
            </div>
          </div>
        </section>
        <section class="section wow fadeInUp" id="features" data-type="anchor" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
          <div class="container w-container w-features">

            <div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.10s" style="padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <figure class="figure-fullwidth"> <img src="https://www.simpleretailpos.com/upload/retail_image/easy-to-use.png" alt="simpleretailpos" width="620" height="465">
                  </figure>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInDown text-left" data-wow-duration="1s" data-wow-delay="0.10s" style="padding:35px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <h2>Is Simple Retail POS System Easy to Use?</h2>
                  <p class="text-gray">Our system is absolutely effortless to use. The whole dashboard is interactive and every single option which is included in it is intuitive and self explanatory. You and your associates will get acquainted with its environment in a matter of minutes. Moreover, we have also included tutorial videos and virtual guide that can help you learn how to interact with the system and get the most out of its features.</p>

                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section novi-background bg-cover bg-image section-md bg-gray-light text-center text-md-left" id="retail" data-type="anchor">
          <div class="container">
            <div class="row justify-content-md-center align-items-md-center row-55">
              <div class="col-md-6 wow fadeInLeft text-left" data-wow-duration="1s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInLeft;">
                <h2>Can Multiple Employees Use Our System Simultaneously?</h2>
                <p class="text-gray">Yes, Simple POS Software allows the accessibility to you and your multiple associates.</p>
                <h2>Is Simple Retail POS System Secure?</h2>
                <p class="text-gray">Absolutely! All accounts are password protected which means you can relax about the security of our platform.</p>
              </div>
              <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInRight;">
                <figure class="figure-fullwidth"> <img src="https://www.simpleretailpos.com/upload/retail_image/access-log.png" alt="simpleretailpos" width="620" height="465">
                </figure>
              </div>
            </div>
          </div>
        </section>

        <!-- <section class="section novi-background bg-cover bg-image bg-default" id="plugnplay" data-type="anchor">
          <div class=section style=padding-bottom:50px>
            <div class="container w-container">
              <div class="top-wrapper wow fadeInLeft" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                <div>
                  <div class=text-block-24-copy>{{$plugnPlay->title}}</div>
                  <h2>{{$plugnPlay->sub_title}}<br/></h2>
                </div>
              </div>
            </div>
            <div class="collection-list-wrapper w-dyn-list">
              <div class="w-dyn-items w-row">
                @if(count($plugnPlayImage))
                @foreach($plugnPlayImage as $plug)
                <div class="portfolio-item-2 w-clearfix w-dyn-item w-col w-col-3 wow fadeInRight" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                  <a data-w-id=709c30b4-e91f-b8d6-73ad-3e535e1d42ae href class="project-wrapper style-2 with-pixel w-inline-block">
                    <div class=image-wrapper><img style="-webkit-transform:translate3d(0,0,0) scale3d(1.1,1.1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);-moz-transform:translate3d(0,0,0) scale3d(1.1,1.1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);-ms-transform:translate3d(0,0,0) scale3d(1.1,1.1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0);transform:translate3d(0,0,0) scale3d(1.1,1.1,1) rotateX(0) rotateY(0) rotateZ(0) skew(0,0)" src="{{url('upload/plug-and-play/'.$plug->image)}}" alt="Axis Push to Talk Set" sizes="(max-width: 479px) 100vw, (max-width: 767px) 32vw, (max-width: 991px) 36vw, 24vw" srcset="{{url('upload/plug-and-play/'.$plug->image)}} 500w, {{url('upload/plug-and-play/'.$plug->image)}} 800w" class="project-image"/></div>
                  </a>
                </div>
                @endforeach
                @endif
              </div>
            </div>
          </div>
        </section> -->

        <section class="section dummyproof-header section-bg-img text-center text-md-left" id="join" data-type=anchor style>
          <div class=container>
            <div class="row justify-content-md-center flex-md-row-reverse align-items-md-center row-55">
              <div class="col-md-5 testimonials-wrapper wow fadeInLeft" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                <h4>{{$dummyProof->title}}</h4>
                <p class=text-gray style=padding-bottom:40px>{{$dummyProof->short_details}}</p>
              </div>
              <div class="col-md-7 wow fadeInRight" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                <figure class=figure-fullwidth> <img src="{{url('upload/retail_image/simplecashregister.png')}}" alt=simpleretailpos width=620 height="465"/>
                </figure>
              </div>
            </div>
          </div>
        </section>

        <style type=text/css>.details{padding:25px;background:#FFF;min-height:300px;text-align:center;background-image:-webkit-radial-gradient(rgba(248,251,255,0.1) 0,rgba(89,147,255,0.1) 100%);background-image:radial-gradient(rgba(248,251,255,0.1) 0,rgba(89,147,255,0.1) 100%);display:block}@media(min-width:576px){.offset-sm-0{margin-left:0}}::-webkit-input-placeholder{color:white}:-ms-input-placeholder{color:white}::placeholder{color:white}</style>
        <footer  class="section page-footer-corporate object-wrap object-wrap-md-left object-wrap-map bg-gray-dark" id=signup data-type="anchor" style="padding-bottom:20px;min-height:680px; border-bottom: 1px #ccc solid;">
          <div class="object-wrap-body details object-wrap-map sizing-1 wow fadeInLeft" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s;padding-bottom:20px>
            <div class="details col-md-12" style=padding-bottom:20px;padding-top:70px>
              <div class="active wow fadeInUp" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                <div class=pricing-title>{{$priceYearly->title}}</div>
                <div class=price-wrap><span class=price>{{$priceYearly->price}}</span></div>
                <ul class="pricing-list-marked pricing-list-marked__mod-2">
                  @if(sizeof($priceYearly->features)>0)
                  <?php

                  $fet=json_decode($priceYearly->features);

                  $fetCount=count($fet); 

                  ?>
                  @foreach($fet as $tt)
                  <li><span>{{$tt}}</span></li>
                  @endforeach
                  @endif
                </ul><a class="btn btn-square btn-primary btn-lg" href="javascript:sendContactQueryByPrice('{{$priceYearly->id}}')">Buy now</a>
              </div>
            </div>
          </div>
          <div class=container>
            <div class="row justify-content-md-end wow fadeInRight" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
              <div class="col-lg-6 col-xl-7">
                <div class=page-footer-corporate-inner>
                  <div class=page-footer-corporate-top style=padding-top:50px!important;padding-bottom:50px!important>
                    <h4>Signup Now <br> &amp; <br> Get Your Store Up To Date</h4>
                    <form class=rd-mailform method=post action=javascript:void(0);>
                      <div class="row align-items-md-end row-20">
                        <div class=col-md-12 id=showSignupConSMS>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input placeholder="Full Name" id=footer-signup-name type=text name=name data-constraints=@Required>
                          </div>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input placeholder="Company / Store Name" id=footer-signup-company_name type=text name=company_name data-constraints=@Required>
                          </div>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input placeholder="Email Address" id=footer-signup-email type=email name=email data-constraints="@Email @Required">
                          </div>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input placeholder=Password id=footer-signup-password type=password name=password data-constraints=@Required>
                          </div>
                        </div>
                        <div class=col-md-12>
                          <div class=form-wrap>
                            <input class=form-input placeholder=Address id=footer-signup-address type=text name=address data-constraints=@Required>
                          </div>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input placeholder=Phone id=footer-signup-phone type=text name=phone data-constraints=@Numeric>
                          </div>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <select class=form-input id=footer-signup-package name=package>
                              <option value=0>Please Select a Package</option>
                              @if(count($allPackage)>0)
                              @foreach($allPackage as $rr)
                              <option value="{{$rr->id}}">{{$rr->title}}-${{$rr->price}}</option>
                              @endforeach
                              @endif
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12 cardprActive" style=display:none>
                          <h5>
                            Please provide Your Card Detail
                          </h5>
                        </div>
                        <div class="col-md-6 cardprActive" style=display:none>
                          <div class=form-wrap>
                            <input class=form-input placeholder="Card Number" id=footer-card-no type=text name=cardno data-constraints=@Required>
                          </div>
                        </div>
                        <div class="col-md-6 cardprActive" style=display:none>
                          <div class=form-wrap>
                            <code id=cardTypeHTML style="color:#09f;font-size:15px;line-height:49px;padding:13px 20px;font-family:monospace">Visa/AMEX/MasterCard/Discover</code>
                          </div>
                        </div>
                        <div class="col-md-12 cardprActive" style=display:none>
                          <div class=form-wrap>
                            <input class=form-input placeholder="Card Holder Name" id=footer-card-holdername type=text name=cardholdername data-constraints=@Required>
                          </div>
                        </div>
                        <div class="col-md-6 cardprActive" style=display:none>
                          <div class=form-wrap>
                            <input class=form-input placeholder="Expiry Date" id=footer-card-expiredate type=text name=expiredate data-constraints=@Required>
                          </div>
                        </div>
                        <div class="col-md-6 cardprActive" style=display:none>
                          <div class=form-wrap>
                            <input class=form-input placeholder="Card Pin Number" id=footer-card-pin type=password name=cardpin data-constraints=@Required>
                          </div>
                        </div>
                        <div class="col-md-12 paypal_button">
                          <button class="btn btn-primary btn-block btn-effect-ujarak Paypal_Pay" type=button><i class="fa fa-paypal"></i> Pay with Paypal</button>
                        </div>
                        <div class="col-md-6 cardprActive" style=display:none>
                          <button class="btn btn-danger btn-block btn-effect-ujarak exit_card_payment" type=button><i class="fa fa-times"></i> Exit Card Payment</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <footer class="section page-footer-corporate object-wrap object-wrap-md-left object-wrap-map bg-gray-dark" id=contactus data-type=anchor>
          <div class=container>
            <div class="row justify-content-md-end wow fadeInRight" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
              <div class="col-lg-6 col-xl-6">
                <div class=page-footer-corporate-inner>
                  <div class=page-footer-corporate-top>
                    <h3>Contacts</h3>
                    <div class=contacts-list style=margin-top:50px>
                      <dl class="terms-list-uppercase terms-list-uppercase-2">
                        <dt>address</dt>
                        <dd style=width:270px;text-align:left>{{$siteInfo->address}}</dd>
                      </dl>
                      <dl class="terms-list-uppercase terms-list-uppercase-2">
                        <dt>Phone</dt>
                        <dd><a class="link link-md" href=tel:248-480-7003>{{$siteInfo->phone}}</a></dd>
                      </dl>
                      <dl class="terms-list-uppercase terms-list-uppercase-2">
                        <dt>e-mail</dt>
                        <dd><a class=link href="mailto:{{$siteInfo->email}}"><span>{{$siteInfo->email}}</span></a></dd>
                      </dl>
                    </div>
                    <hr class=gray>
                    <div class=page-footer-corporate-bottom>
                      <ul class=inline-list-xxs style=margin-left:auto;margin-right:auto>
                        <li><a class="icon novi-icon icon-xs icon-circle icon-mako fa fa-instagram" href=#></a></li>
                        <li><a class="icon novi-icon icon-xs icon-circle icon-mako fa fa-facebook" href=#></a></li>
                        <li><a class="icon novi-icon icon-xs icon-circle icon-mako fa fa-twitter" href=#></a></li>
                        <li><a class="icon novi-icon icon-xs icon-circle icon-mako fa fa-google-plus" href=#></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6">
                <div class=page-footer-corporate-inner>
                  <div class=page-footer-corporate-top>
                    <h3>Get in Touch</h3>
                    <form class="rd-mailform" method="post" onsubmit="submitContactQuery()">
                      <div class="row align-items-md-end row-20">
                        <div class=col-md-12 id=showConSMS>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input id=footer-contact-first-name type=text name=name data-constraints=@Required>
                            <label class=form-label for=footer-contact-first-name>Your Name</label>
                          </div>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input id=footer-contact-last-name type=text name=phone data-constraints=@Numeric>
                            <label class=form-label for=footer-contact-last-name>Phone</label>
                          </div>
                        </div>
                        <div class=col-sm-12>
                          <div class=form-wrap>
                            <textarea class=form-input id=footer-contact-message name=message data-constraints=@Required></textarea>
                            <label class=form-label for=footer-contact-message>Your Message</label>
                          </div>
                        </div>
                        <div class=col-md-6>
                          <div class=form-wrap>
                            <input class=form-input id=footer-contact-email type=email name=email data-constraints="@Email @Required">
                            <label class=form-label for=footer-contact-email>E-mail</label>
                          </div>
                        </div>
                        <div class=col-md-6>
                          <button class="btn btn-primary btn-block btn-effect-ujarak" type=submit>send message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class=footer>
          <div class="container w-container">
            <div>
              <div class=w-row>
                <div class="w-col w-col-3 w-col-stack wow fadeInDown" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                  <div class=footer-column-2>
                    <a href=# class="footer-logo-block w-inline-block"><img src="{{url('upload/site_logo/'.$siteInfo->site_logo)}}" width=150 alt=simpleretailpos class="image-117 w-hidden-medium w-hidden-small w-hidden-tiny"/></a>
                    <div class="top-margin half">
                      <p><strong>{{$siteInfo->site_name}}</strong></p>
                      <div>
                        <p><span>{{$siteInfo->email}}</span></p>
                      </div>
                      <div>
                        <p><span>{{$siteInfo->phone}}<br/></span></p>
                      </div>
                      <div>
                        <p>
                          <span>
                            {{$siteInfo->address}}
                          </span>
                        </p>
                      </div>
                    </div><br>
                    <a href=# class="footer-logo-block w-inline-block"><img src="{{url('site/images/nucleuspos.png')}}" width=150 alt=simpleretailpos class="image-117 w-hidden-medium w-hidden-small w-hidden-tiny"/></a>
                  </div>
                </div>
                <div class="w-col w-col-3 w-col-stack wow fadeInLeft" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                  <div class=footer-title></div>
                  <div class>
                    <a href=javascript:backtoTop() class="footer-block w-inline-block w--current">
                      <div class="footer-link normal">Home</div>
                    </a>
                    <a href=#about-us class="footer-block w-inline-block">
                      <div class="footer-link normal">ABOUT US</div>
                    </a>
                    <a href=#features class="footer-block w-inline-block">
                      <div class="footer-link normal">Features</div>
                    </a>
                    <a href=#dummyproof class="footer-block w-inline-block">
                      <div class="footer-link normal">Dummy Proof</div>
                    </a>
                    <a href=#pricing class="footer-block w-inline-block">
                      <div class="footer-link normal">Our Pricing</div>
                    </a>
                    <a href=#reports class="footer-block w-inline-block">
                      <div class="footer-link normal">Business Reports</div>
                    </a>
                    <a href=#retail class="footer-block w-inline-block">
                      <div class="footer-link normal">Retail</div>
                    </a>
                    <a href=#plugnplay class="footer-block w-inline-block">
                      <div class="footer-link normal">PLUG-and-play</div>
                    </a>
                     <a href="https://www.simpleretailpos.com/blog/" class="footer-block w-inline-block">
                      <div class="footer-link normal">Blog</div>
                    </a>
                    <a href=#contactus class="footer-block w-inline-block">
                      <div class="footer-link normal">Contact Us</div>
                    </a>
                    
                  </div>
                </div>


                <div class="w-col w-col-3 w-col-stack wow fadeInLeft" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                  <div class=footer-title></div>
                  <div class>
                    <a href= "https://www.simpleretailpos.com/business-pos-system"class="footer-block w-inline-block w--current">
                      <div class="footer-link normal">Business POS System </div>
                    </a>
                    <a href="https://www.simpleretailpos.com/simple-cash-register" class="footer-block w-inline-block">
                      <div class="footer-link normal">Simple Cash Register
                      </div>
                    </a>
                    <a href="https://www.simpleretailpos.com/retail-store" class="footer-block w-inline-block">
                      <div class="footer-link normal">POS For Retail Store
                      </div>
                    </a>
                  </div>
                </div>



                <div class="w-col w-col-3 w-col-stack wow fadeInLeft" data-wow-duration=1s data-wow-delay=0.10s style=visibility:visible;animation-duration:1s;animation-delay:.1s>
                  <div class=footer-title></div>
                  <div class>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.9230060921436!2d-83.13563408454571!3d42.641792179168995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824c268901b9c51%3A0xd9f3eb811301fab!2s2632%20S%20Rochester%20Rd%2C%20Rochester%20Hills%2C%20MI%2048307%2C%20USA!5e0!3m2!1sen!2s!4v1568404094495!5m2!1sen!2s" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  </div>
                </div>









              </div>
            </div>
            <div class=clearfix></div>
            <div class=top-margin>
              <div>
                <p class=copyright>Copyright © 2019 SimpleRetailPOS.com<br/></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=snackbars id=form-output-global></div>
    @include('site.include.fotter')
    <script type=text/javascript src="{{url('site/js/srpac.js')}}"></script>
    <script type=text/javascript>@if(isset($success_msg))
      showSignupSuccess("{{$success_msg}}");@endif @if(isset($error_msg))
    showSignupError("{{$error_msg}}"); @endif</script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Simple Retail POS",
        "url": "http://simpleretailpos.com/",
        "potentialAction": {
        "@type": "SearchAction",
        "target": "{search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
  </script>



</body>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer');</script>
</html>