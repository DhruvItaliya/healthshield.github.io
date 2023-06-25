<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('other_css_js/contact_us.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="new_contact_wrapper">
        <div class="banner">
            <div class="content">
                <p>
                    <span>At HealthShield, it is our constant endeavour to provide great customer experience. In case
                        you require assistance, we have created multiple ways to reach out to us. We commit to resolving
                        your queries to your satisfaction.</span>
                </p>
                <div class="contactWrapper">
                    <div class="cta-login">
                        <div class="banner-img">
                            <img src="https://static.pbcdn.in/cdn/images/contact-banner.svg" class="desktop"
                                alt="banner-image">
                        </div>

                        <div class="list-wrapper">
                            <h3>My account <span class="lead-text">Fastest One-stop Servicing Gateway</span></h3>
                            <ul class="type-stars">
                                <li>Download policy</li>
                                <li>Raise a query</li>
                                <li>Share feedback</li>
                                <li>Track policy status</li>
                                <li>Request a callback</li>
                                <li>View policy details &amp; more</li>
                            </ul>

                            <div class="login-btn">
                                <a href="{{ url('/login  ') }}" id="myacc-login-btn">Login to my account</a>
                            </div>
                        </div>
                    </div>

                    <div class="cta-needhelp">
                        <h3>Need help? <span class="lead-text">Choose how you like to connect with us</span></h3>
                        <a class="rc text" href="#">
                            <div class="icon"><img src="https://static.pbcdn.in/cdn/images/request_callback.svg"
                                    alt="request callback"></div>Request a call back
                        </a>
                        <a class="chatwithus text chat-with-us">
                            <div class="icon"><img src="https://static.pbcdn.in/cdn/images/chatwithus.svg"
                                    alt="chat with us"></div>Chat with us
                        </a>
                        <a class="conntectwhatapp text desk" href="#">
                            <div class="icon"><img src="https://static.pbcdn.in/cdn/images/connectwhatapp.svg"
                                    alt="connect whatapp"></div>
                            <span class="small_text">Connect on Whatsapp at</span>
                            +91 8506XXXXXX
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    <div class="office_address">
        <div class="title">Registered Office</div>
        <div class="subtext">HealthShield Insurance Brokers Private Limited</div>
        <div class="alladdress">
            <div class="add0 format" style="border-right: 1px solid black;">
                <div class="add_title">Registered Office</div>
                <div class="add_subtext">
                    Plot No.1234, Sector - 00, Gurgaon, Haryana – 145001
                    <span>Call at: 0124-42XXXXX</span>
                </div>
            </div>
            <div class="add6 format">
                <div class="add_title Adjust">HealthShield Exclusive Stores in Gurgaon <span class="Line"></span>
                </div>

                <div class="add_subtext">
                    Sector 14 HUDA Market - Shop No 40, Gurgaon - 122001
                    <span>Call at: 0124-50XXXXX</span>
                </div>
                <div class="add_subtext">
                    Sector 31 HUDA Market - Shop No 202, Gurgaon - 122022
                    <span>Call at: 0124-50XXXXX</span>

                </div>
                <div class="add_subtext">
                    DLF Shopping Mall, Arjun Marg - Shop No D-93, Gurugram - 122002
                    <span>Call at: 0124-61XXXXX</span>

                </div>
                <div class="add_subtext">
                    Sector-12, New Railway Road - Plot No 485/7, Gurugram - 122022
                    <span>Call at: 0124-61XXXXX</span>

                </div>
                <div class="add_subtext">
                    Arcadia - Shop No. 98, South City 2, Gurugram - 122018
                    <span>Call at: 0124-61XXXXX</span>

                </div>

            </div>
            <div class="add7 format" style="border-right: 1px solid black;">
                <div class="add_title">Agra</div>
                <div class="add_subtext">
                    153 A-block, Opposite LIC Building, Sanjay Place, Agra – 282002 <span>Call at:
                        180030XXXXX</span>
                </div>
            </div>
            <div class="add7 format">
                <div class="add_title">Aligarh</div>
                <div class="add_subtext">
                    Ground Floor, PQR Complex, J-77, Janakpauri, Ramghat Road, Aligarh - Uttar Pradesh
                    <br>Landmark- Opposite Lal Mandir <span>Call at: 0124-61XXXXX</span>
                </div>
            </div>
            <div class="add7 format" style="border-right: 1px solid black;">
                <div class="add_title">Allahabad (Prayagraj)</div>
                <div class="add_subtext">
                    Building No. 123, 10th floor, above Helios Showroom, Civil Lines, Prayagraj, Uttar Pradesh
                    211001 <span>Call at: 180027XXXXX</span>
                </div>
            </div>
            <div class="add7 format">
                <div class="add_title">Alwar</div>
                <div class="add_subtext">
                    First floor, Scheme no. 1, XYZ complex, Road no. 2, Alwar , Rajasthan-301001 <br>Landmark- Above
                    Axis Bank <span>Call at: 0124-61XXXXX</span>
                </div>
            </div>
            <div class="add7 format">
                <div class="add_title">Ambala</div>
                <div class="add_subtext">
                    123, ABC road, Ambala Cantt, Haryana-133001<br>Landmark- Near AU Small Finance Bank
                    <span>Call at: 0124-61XXXXX</span>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
