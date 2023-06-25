<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('other_css_js/about.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="container">
        <div class="about_company_detail">
            <div class="content-image first">
                <div class="content slide-in animate">
                    <p class="tag">Our origin</p>
                    <h1>How it all started</h1>
                    <p class="description">HealthShield was founded in 2008 with one objective: bringing transparency in
                        insurance. The founders wanted to reimagine insurance, so they started by simplifying all the
                        information around plans, ending the rampant mis-selling, and preventing policy lapses.</p>
                </div>
                <div class="image about-svg-1 animate">
                    <img src="https://static.pbcdn.in/cdn/images/career/about-us/about-us-img1.png" alt=""
                        class="lower purple">
                </div>
            </div>
            <div class="content-image second reverse">
                <div class="content animate">
                    <p class="tag big">Our present</p>
                    <h1>13 years of success</h1>
                    <p class="description">Today, we are India’s best &amp; largest online insurance marketplace. Over
                        <span class="blue">9+ million (90 lakh+)</span> individuals have come to us &amp; bought the
                        best insurance plans from the top insurers in the country. We have sold over <span
                            class="green">19 million policies</span> since inception, and this number is only growing.
                    </p>
                </div>
                <div class="image about-svg-2 animate">
                    <img src="https://static.pbcdn.in/cdn/images/career/about-us/about-us-img3.png" alt=""
                        class="lower blue">
                </div>
            </div>
            <div class="content-image third">
                <div class="content">
                    <p class="tag">Our vision</p>
                    <h1>A look forward</h1>
                    <p class="description">While we are happy with how we are changing insurance for the country, we
                        know there is still a lot of work to be done. Our vision to bring pioneering technologies &amp;
                        innovations to the field continues to grow. We aspire to build a health &amp; financial safety
                        net for more households in India in the coming years.</p>
                </div>
                <div class="image about-svg-3">
                    <img src="https://static.pbcdn.in/cdn/images/career/about-us/about-us-img5.png" alt=""
                        class="lower yellow">
                </div>
            </div>
            <div class="key-points-section">
                <div class="key-points-box">
                    <img src="https://static.pbcdn.in/cdn/images/career/about-us/about-us-icon-1.png" alt="">
                    <p class="heading"><strong>93.4 % market share*</strong></p>
                    <p class="sub-heading">India’s largest digital insurance marketplace</p>
                    <p class="disclaimer">*Based on # of policies sold in FY20 as per Frost and Sullivan</p>
                </div>
                <div class="key-points-box">
                    <img src="https://static.pbcdn.in/cdn/images/career/about-us/about-us-icon-2.png" alt="">
                    <p class="heading"><strong>Over INR 7 Trillion</strong> FY’21 Sum Assured*</p>
                    <p class="disclaimer">includes new policies and renewals from life and non-life insurance</p>
                </div>
                <div class="key-points-box">
                    <img src="https://static.pbcdn.in/cdn/images/career/about-us/about-us-icon-3.png" alt="">
                    <p class="heading"><strong>Over 19 Million*</strong> insurance policies sold since inception</p>
                    <p class="disclaimer">*Until FY’21</p>
                </div>
                <div class="key-points-box">
                    <img src="https://static.pbcdn.in/cdn/images/career/about-us/about-us-icon-4.png" alt="">
                    <p class="heading">Over <strong>126 Million*</strong> visits in FY’21</p>

                </div>
            </div>

        </div>

    </div>
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
