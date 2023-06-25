<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="blk-prd featurebox row justify-content-center">
        <div class=" col-sm-8 col-md-3">
            <article class="cancer-insurance prd-bg">
                <div class="block-data">
                    <div class="left-container">
                        <span class="float-icon investment-plan"></span>
                        <span class="icon icon-bg cancer-insurance"></span>
                        <p class="head">Cancer Insurance</p>
                        <div>
                            <p class="copy">
                                Protect yourself &amp; <br> your family against <br><span class="fw-bold">Cancer</span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-8 col-md-3">
            <article class="covid-insurance prd-bg">
                <div class="block-data">
                    <div class="left-container">
                        <span class="float-icon investment-plan"></span>
                        <span class="icon icon-bg investment-plans"></span>
                        <p class="head">Covid-19 Insurance</p>
                        <div>
                            <p class="copy">
                                Protect yourself &amp; <br> your family against <br><span
                                    class="fw-bold">Covid-19</span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-8 col-md-3">
            <article class="family-plans prd-bg">
                <div class="block-data">
                    <div class="left-container">
                        <span class="float-icon investment-plan"></span>
                        <span class="icon icon-bg investment-plans"></span>
                        <p class="head">Family Plans</p>
                        <div>
                            <p class="copy">Visit <span class="fw-bold">Family</span><br>plans starting
                                at<br><span class="fw-bold">$20/month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="best-place">
        <div class="container">
            <div class="left-block">
                <div class="txt-block opacity-1">What makes<br> <span class="fw-bold">HealthSheild</span> one of<br>
                    <span class="fw-bold">India's
                        favourite places</span> <br> to <span class="fw-bold"> buy Health insurance</span>?
                </div>

                <div class="right-block top-0">
                    <div class="info-box trust">
                        <span class="top-icon">🎉</span>
                        <p class="head">Over 9 million</p>
                        <p class="copy">customers trust us &amp; have bought their insurance on Healthsheild</p>
                    </div>
                    <div class="info-box insurer">
                        <span class="top-icon">🔎</span>
                        <p class="head">50+ insurers</p>
                        <p class="copy">partnered with us so that you can compare easily &amp; transparently</p>
                    </div>
                    <div class="info-box lowest-price">
                        <span class="top-icon">🤩</span>
                        <p class="head">Great Price</p>
                        <p class="copy">for all kinds of insurance plans available online</p>
                    </div>
                    <div class="info-box claims">
                        <span class="top-icon">🤵🏻‍♀️</span>
                        <p class="head">Claims</p>
                        <p class="copy">support built in with every policy for help, when you need it the most</p>
                    </div>
                    <img src="https://static.pbcdn.in/cdn/images/home-v1/blank.gif" loading="lazy" alt="blank"
                        style="width:1px; height:1px;">
                </div>
            </div>
        </div>
    </div>
    <div class="mid-row">
        <div class="container">
            <h2>PB Advantage
                <span></span>
            </h2>
            <p class="text-header">When you buy insurance from us, you get more than just financial safety.
                You also get: our promise of simplifying complex insurance terms and conditions, quick stress-free
                claims, instant quotes from top insurers and being present for you in the toughest of times.</p>
            <div class="list">
                <ul>
                    <li>
                        <span class="sprite-image lowest-price"></span>
                        <div>
                            <p class="heading">One of the best Prices</p>
                            <p class="text">Guaranteed</p>
                        </div>
                    </li>
                    <li>
                        <span class="sprite-image unbiased-advice"></span>
                        <div>
                            <p class="heading">Unbiased Advice</p>
                            <p class="text">Keeping customers first</p>
                        </div>
                    </li>
                    <li>
                        <span class="sprite-image reliable"></span>
                        <div>
                            <p class="heading">100% Reliable</p>
                            <p class="text">Regulated by IRDAI</p>
                        </div>
                    </li>
                    <li>
                        <span class="sprite-image claim-support"></span>
                        <div>
                            <p class="heading">Claims Support</p>
                            <p class="text">Made stress-free</p>
                        </div>
                    </li>
                    <li>
                        <span class="sprite-image happy-help"></span>
                        <div>
                            <p class="heading">Happy to Help</p>
                            <p class="text">Every day of the week</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="app-block">
        <div class="container">
            <div class="row">
                <div class="copy-part col-sm-12 col-md-6">
                    <p class="text-head">Get the <span>HealthSheild app</span></p>
                    <p class="line"><span></span></p>
                    <p class="control">Get control of all your insurance needs anywhere, anytime </p>
                    <ul class="list">
                        <li>Compare different insurance policies</li>
                        <li>Buy, store and share all your policies online</li>
                        <li>Track your policy status on the go</li>
                        <li>Download your policy with a single tap</li>
                    </ul>

                    <span class="text">Download our app from</span><br>
                    <a href="#" class="play-store googleplay download-app1"></a>
                    <a href="#" class="play-store ios install-now"></a>
                </div>
                <div class="mobile col-sm-12 col-md-6"><img src="{{ url('index_css_js/mobile.png') }}" alt="app"
                        class="lazy app store" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
