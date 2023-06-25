<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('policy_css_js/policy.css') }}">
</head>
</head>

<body>
    @include('layouts.header')
    <div class="container">
        @if (session('success'))
            <div id="alertMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('fail'))
            <div id="alertMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1 class=" heading text-center  mt-4">Available Policies</h1>
        <div class="policy-container mb-4">
            <div class="policy-card">
                <h2 class="policy-title">Policy 1</h2>
                <p class="policy-description">This is a comprehensive health insurance policy that covers
                    hospitalization, medical expenses, and critical illnesses.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This is a comprehensive health insurance policy that covers
                            hospitalization, medical expenses, and critical illnesses.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Hospitalization coverage for both planned and emergency admissions.</li>
                            <li>Coverage for medical expenses, including doctor consultations, diagnostics,
                                and medications.</li>
                            <li>Protection against critical illnesses, with lump-sum payouts upon diagnosis.
                            </li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Hospital room charges, nursing expenses, and ICU costs.</li>
                            <li>Surgical procedures, including pre- and post-operative care.</li>
                            <li>Diagnostic tests, such as blood tests, X-rays, and MRI scans.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Pre-existing medical conditions for a specified waiting period.</li>
                            <li>Cosmetic or elective procedures not deemed medically necessary.</li>
                            <li>Experimental treatments or procedures not approved by the regulatory
                                authorities.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$100/month</p>
                <a href="{{ url('/policy/check', ['id' => '1', 'premium' => '100']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>
            <div class="policy-card">
                <h2 class="policy-title">Policy 2</h2>
                <p class="policy-description">This policy offers basic health coverage for routine medical
                    check-ups,consultations, and prescription medication.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy offers basic health coverage for routine medical
                            check-ups,consultations, and prescription medication.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for routine medical check-ups and preventive care.</li>
                            <li>Access to consultations with healthcare professionals for diagnosis and treatment.</li>
                            <li>Prescription medication coverage for essential drugs.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Regular medical check-ups and preventive screenings.</li>
                            <li>Consultations with doctors and specialists for diagnosis and treatment.</li>
                            <li>Coverage for prescription medications deemed necessary for treatment.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Specialized treatments and procedures beyond routine care.</li>
                            <li>Hospitalization and emergency medical services.</li>
                            <li>Coverage for non-essential or experimental medications.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$150/month</p>
                <a href="{{ url('/policy/check', ['id' => '2', 'premium' => '150']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>
            <div class="policy-card">
                <h2 class="policy-title">Policy 3</h2>
                <p class="policy-description">This policy provides specialized coverage for maternity care, including
                    pre and postnatal consultations, delivery expenses, and newborn care.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy provides specialized coverage for maternity care,
                            including pre and postnatal consultations, delivery expenses, and newborn care.
                        <p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Comprehensive prenatal consultations with healthcare professionals.</li>
                            <li>Coverage for prenatal tests, including ultrasounds and blood work.</li>
                            <li>Newborn care, including vaccinations and necessary medical check-ups.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Pre and postnatal consultations with healthcare professionals.</li>
                            <li>Prenatal tests and screenings.</li>
                            <li>Hospital charges for delivery, including room charges, medical procedures, and
                                medications.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Fertility treatments or assistance with conception.</li>
                            <li>Cosmetic procedures related to pregnancy or childbirth.</li>
                            <li>Medical expenses incurred for non-pregnancy-related conditions.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$200/month</p>
                <a href="{{ url('/policy/check', ['id' => '3', 'premium' => '200']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>
            <div class="policy-card">
                <h2 class="policy-title">Policy 4</h2>
                <p class="policy-description">This policy is designed for senior citizens and covers age-related health
                    issues, chronic diseases, and emergency medical services.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy is designed for senior citizens and covers age-related
                            health issues, chronic diseases, and emergency medical services.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for hospitalization expenses, including room charges, doctor fees,
                                and medical tests.</li>
                            <li>Coverage for pre-existing conditions and chronic diseases, ensuring continued
                                medical support.</li>
                            <li>Emergency medical services, including ambulance coverage and emergency room
                                treatments.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Coverage for age-related health issues, such as arthritis, diabetes, and hypertension.
                            </li>
                            <li>Treatment expenses for chronic diseases, including regular medication and specialist
                                consultations.</li>
                            <li>Emergency medical services, such as emergency room treatments and ambulance
                                transportation.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Cosmetic procedures and elective surgeries.</li>
                            <li>Alternative therapies and experimental treatments.</li>
                            <li>Non-emergency dental and vision treatments.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$250/month</p>
                <a href="{{ url('/policy/check', ['id' => '4', 'premium' => '250']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>
            <div class="policy-card">
                <h2 class="policy-title">Policy 5</h2>
                <p class="policy-description">This policy focuses on preventive care, offering coverage for
                    vaccinations, health screenings, and wellness programs.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy focuses on preventive care, offering coverage for
                            vaccinations, health screenings, and wellness programs.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for vaccinations to protect against various diseases and infections.
                            </li>
                            <li>Health screenings for early detection of illnesses and proactive health
                                management.</li>
                            <li>Wellness programs to promote a healthy lifestyle and prevent chronic
                                conditions.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Comprehensive coverage for a wide range of vaccinations for individuals of all ages.
                            </li>
                            <li>Health screenings and diagnostic tests for early detection of diseases and health
                                conditions.</li>
                            <li>Access to wellness programs and resources for maintaining good health and preventing
                                illnesses.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Non-preventive treatments and procedures not directly related to vaccinations or health
                                screenings.</li>
                            <li>Experimental or unproven preventive methods or treatments.</li>
                            <li>Non-medical wellness activities and services not endorsed by healthcare professionals.
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$180/month</p>
                <a href="{{ url('/policy/check', ['id' => '5', 'premium' => '180']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>

            <div class="policy-card">
                <h2 class="policy-title">Policy 6</h2>
                <p class="policy-description">This policy provides coverage for dental treatments, including routine
                    check-ups, fillings, extractions, and orthodontics.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy provides coverage for dental treatments, including
                            routine check-ups, fillings, extractions, and orthodontics.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for routine dental check-ups and cleanings.</li>
                            <li>Coverage for common dental procedures, such as fillings and extractions.</li>
                            <li>Coverage for orthodontic treatments, including braces or aligners.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Routine dental check-ups and preventive care.</li>
                            <li>Dental treatments for cavities, fillings, and extractions.</li>
                            <li>Orthodontic treatments, such as braces or aligners.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Cosmetic dental procedures, such as teeth whitening.</li>
                            <li>Dental treatments for pre-existing conditions.</li>
                            <li>Non-essential dental procedures not related to oral health.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$120/month</p>
                <a href="{{ url('/policy/check', ['id' => '6', 'premium' => '120']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>

            <div class="policy-card">
                <h2 class="policy-title">Policy 7</h2>
                <p class="policy-description">This policy offers coverage for alternative therapies, such as
                    acupuncture, chiropractic care, and naturopathy.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy offers coverage for alternative therapies, such as
                            acupuncture, chiropractic care, and naturopathy.</p>

                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for alternative therapies, including acupuncture, chiropractic care,
                                and naturopathy.</li>
                            <li>Access to a network of alternative healthcare providers.</li>
                            <li>Coverage for associated expenses, such as herbal supplements or therapeutic equipment.
                            </li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Alternative therapies, such as acupuncture, chiropractic care, and naturopathy.</li>
                            <li>Treatments and consultations with alternative healthcare providers.</li>
                            <li>Associated expenses for alternative therapies, such as herbal supplements or therapeutic
                                equipment.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Conventional medical treatments and procedures.</li>
                            <li>Experimental alternative therapies not recognized by regulatory bodies.</li>
                            <li>Alternative therapies performed by non-qualified practitioners.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$140/month</p>
                <a href="{{ url('/policy/check', ['id' => '7', 'premium' => '140']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>

            <div class="policy-card">
                <h2 class="policy-title">Policy 8</h2>
                <p class="policy-description">This policy specializes in mental health coverage, including therapy
                    sessions, psychiatric consultations, and medication.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy specializes in mental health coverage, including
                            therapy
                            sessions, psychiatric consultations, and medication.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for therapy sessions with licensed mental health professionals.</li>
                            <li>Psychiatric consultations and evaluations for diagnosis and treatment
                                planning.</li>
                            <li>Coverage for prescribed psychiatric medications.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Therapy sessions with licensed mental health professionals, including psychologists and
                                counselors.</li>
                            <li>Psychiatric consultations and evaluations to assess mental health conditions and develop
                                treatment plans.</li>
                            <li>Coverage for prescribed psychiatric medications to manage mental health symptoms.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Non-psychiatric treatments and medical conditions unrelated to mental health.</li>
                            <li>Experimental therapies and non-evidence-based treatments.</li>
                            <li>Over-the-counter medications and supplements.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$220/month</p>
                <a href="{{ url('/policy/check', ['id' => '8', 'premium' => '220']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>

            <div class="policy-card">
                <h2 class="policy-title">Policy 9</h2>
                <p class="policy-description">This policy is designed for frequent travelers, providing coverage for
                    medical emergencies and evacuation during trips.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy is designed for frequent travelers, providing
                            coverage for medical emergencies and evacuation during trips.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for medical expenses incurred during travel, including
                                hospitalization, doctor fees, and medication.</li>
                            <li>Emergency medical evacuation coverage, ensuring safe transportation to the
                                nearest suitable medical facility.</li>
                            <li>Trip interruption coverage, compensating for lost travel expenses in case of
                                trip cancellations or delays.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Medical expenses during travel, including hospitalization, doctor consultations, and
                                prescription medications.</li>
                            <li>Emergency medical evacuation to the nearest suitable medical facility for advanced
                                treatments.</li>
                            <li>Trip interruption coverage, compensating for prepaid travel expenses due to trip
                                cancellations or delays.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Non-emergency medical expenses not related to travel.</li>
                            <li>Pre-existing conditions that require ongoing treatment.</li>
                            <li>Losses or expenses due to illegal activities or extreme sports during the trip.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$190/month</p>
                <a href="{{ url('/policy/check', ['id' => '9', 'premium' => '190']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>

            <div class="policy-card">
                <h2 class="policy-title">Policy 10</h2>
                <p class="policy-description">This policy caters to individuals with pre-existing conditions, offering
                    coverage for ongoing treatments and medications.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy caters to individuals with pre-existing conditions,
                            offering coverage for ongoing treatments and medications.</p>

                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for ongoing treatments and therapies related to pre-existing
                                conditions.</li>
                            <li>Access to a network of specialists and healthcare providers for specialized
                                care.</li>
                            <li>Coverage for prescription medications and regular medication refills.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Treatment expenses for pre-existing conditions, including doctor consultations and
                                medical procedures.</li>
                            <li>Coverage for prescription medications, ensuring access to necessary drugs.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Cosmetic procedures and elective surgeries.</li>
                            <li>Alternative therapies and experimental treatments.</li>
                            <li>Non-prescription medications and over-the-counter drugs.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$300/month</p>
                <a href="{{ url('/policy/check', ['id' => '10', 'premium' => '300']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>

            </div>

            <div class="policy-card">
                <h2 class="policy-title">Policy 11</h2>
                <p class="policy-description">This policy is specifically designed for families, providing coverage for
                    all family members, including children and dependents.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy is specifically designed for families, providing
                            coverage for all family members, including children and dependents.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Comprehensive coverage for hospitalization expenses, including room charges,
                                doctor fees, and medical tests.</li>
                            <li>Coverage for pre-existing conditions and chronic diseases, ensuring continued
                                medical support for all family members.</li>
                            <li>Emergency medical services, including ambulance coverage and emergency room
                                treatments.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Coverage for age-related health issues, such as arthritis, diabetes, and hypertension.
                            </li>
                            <li>Treatment expenses for chronic diseases, including regular medication and specialist
                                consultations.</li>
                            <li>Emergency medical services, such as emergency room treatments and ambulance
                                transportation.</li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Cosmetic procedures and elective surgeries.</li>
                            <li>Alternative therapies and experimental treatments.</li>
                            <li>Non-emergency dental and vision treatments.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$280/month</p>
                <a href="{{ url('/policy/check', ['id' => '11', 'premium' => '280']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>
            </div>

            <div class="policy-card">
                <h2 class="policy-title">Policy 12</h2>
                <p class="policy-description">This policy offers coverage for specialized treatments such as organ
                    transplants, cancer therapies, and advanced surgeries.</p>
                <div class="modal" id="policy-modal">
                    <div class="modal-content">
                        <span class="close" style="font-size: 25px"><button class="btn">&times;</button></span>
                        <h2 class="policy-title"></h2>
                        <p class="policy-description">This policy offers coverage for specialized treatments such as
                            organ transplants, cancer therapies, and advanced surgeries.</p>
                        <h3>Benefits</h3>
                        <ul class="policy-benefits">
                            <li>Coverage for specialized treatments, including organ transplants and advanced
                                surgeries.</li>
                            <li>Coverage for cancer therapies, including chemotherapy, radiation, and
                                targeted therapies.</li>
                            <li>Access to specialized healthcare facilities and renowned medical
                                professionals.</li>
                        </ul>
                        <hr>
                        <h3>Coverage</h3>
                        <ul class="policy-coverage">
                            <li>Specialized treatments such as organ transplants, bone marrow transplants, and heart
                                surgeries.</li>
                            <li>Cancer therapies, including chemotherapy, radiation, immunotherapy, and precision
                                medicine.</li>
                            <li>Access to advanced medical procedures and technologies for complex health conditions.
                            </li>
                        </ul>
                        <hr>
                        <h3>Exclusions</h3>
                        <ul class="policy-exclusions">
                            <li>Cosmetic procedures and elective surgeries.</li>
                            <li>Non-medically necessary experimental treatments.</li>
                            <li>Treatments for pre-existing conditions not related to specialized care.</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="know-more-link">Know More</a>
                <p class="policy-price">$400/month</p>
                <a href="{{ url('/policy/check', ['id' => '12', 'premium' => '400']) }}"
                    onclick="return confirm('Are you sure you want to get this policy?')"><button
                        class="get-button">Get</button></a>
            </div>
        </div>
    </div>
    @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script>

        // Get the modal element
        var modal = document.getElementById('policy-modal');

        // Get the "Know More" links
        var knowMoreLinks = document.getElementsByClassName('know-more-link');

        // Loop through the "Know More" links and add click event listeners
        for (var i = 0; i < knowMoreLinks.length; i++) {
            knowMoreLinks[i].addEventListener('click', function(e) {
                e.preventDefault();

                // Get the policy details
                var policyTitle = this.parentNode.querySelector('.policy-title').textContent;
                var policyBenefits = this.parentNode.querySelector('.policy-benefits').innerHTML;
                var policyCoverage = this.parentNode.querySelector('.policy-coverage').innerHTML;
                var policyExclusions = this.parentNode.querySelector('.policy-exclusions').innerHTML;

                // Set the policy details in the modal
                modal.querySelector('.policy-title').textContent = policyTitle;
                modal.querySelector('.policy-benefits').innerHTML = policyBenefits;
                modal.querySelector('.policy-coverage').innerHTML = policyCoverage;
                modal.querySelector('.policy-exclusions').innerHTML = policyExclusions;

                // Show the modal
                modal.style.display = 'block';
            });
        }

        // Close the modal when the close button is clicked
        modal.querySelector('.close').addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Close the modal when the user clicks outside of it
        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
        setTimeout(function() {
            document.getElementById('alertMessage').remove();
        }, 3000);
    </script>
</body>

</html>
