<x-header />


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/img/img-6.jpg') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/img-7.jpg') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/kaavya-5.jpg') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/kaavya-9.jpg') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/img-3.jpg') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/img-4.jpg') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/img-5.jpg') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/kaavya-3.jpg') }}" alt="Image">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                    <h6 class="mb-0 text-success">Welcome To Kaavya Arthopedic Hospital & Clinic</h6>
                </div>
                <small class="mb-4">At Kaavya Orthopedic Clinic, we offer the finest orthopedic consultancy, for
                    conditions linked with knee, hip, shoulder, elbow, wrist, hand, foot and ankle. In the leadership
                    and guidance of Dr Rohit Kumar who is a well known Orthopedic Surgeon.</small><br><br>
                <small class="mb-4">The foundation was led in the year 2015. At Kaavya Orthopedic Clinic the complete
                    team of specialists led by the founder and visionary Dr Rohit Kumar who is an Orthopedic Consultant
                    and Surgeon is a leader in orthopedic healthcare.</small><br><br>
                <small class="mb-4">Since, its inception Kaavya Orthopedic Clinic has been the forerunner and leader
                    in Orthopedic consultancy, treatment and surgery. We operate from <span class="text-danger">Kaavya
                        Orthopedic hospital, New Baradwari, Sakchi, Jamshedpur.</span></small>
            </div>

            <div class="col-lg-5" style="min-height: 400px;" data-aos="fade-left">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100" src="{{ asset('assets/img/kaavya-2.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Appointment Start -->
<div class="container-fluid bg-success bg-appointment my-5 ">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5" data-aos="fade-right">
                    <h5 class="text-white mb-4">
                        Kaavya Orthopedic Hospital and Clinic
                    </h5>
                    <small class="text-white mb-0">
                        At Kaavya Orthopedic Clinic, we offer the finest orthopedic consultancy, for conditions linked
                        with knee, hip, shoulder, elbow, wrist, hand, foot and ankle. In the leadership and guidance of
                        Dr Rohit Kumar who is a well known Orthopedic Surgeon.
                    </small><br><br>
                    <small class="text-white mb-0">The foundation was led in the year 2015. At Kaavya Orthopaedic
                        Clinic the complete team of specialists led by the founder and visionary Dr Rohit Kumar who is
                        an Orthopaedic Consultant and Surgeon is a leader in orthopaedic healthcare.</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 bg-success"
                    data-aos="zoom-in">
                    <h5 class="text-white mb-4">Make Appointment</h5>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px">
                                    <option selected>Select A Treatment</option>
                                    <option value="1">Joint Replacement</option>
                                    <option value="2">Arthoscopy</option>
                                    <option value="3">Shoulder Surgery</option>
                                    <option value="4">Redo Surgeries</option>
                                    <option value="5">Fracture Surgeries</option>
                                    <option value="6">Children Arthopaedics</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px">
                                    <option selected>Select Doctor</option>
                                    <option value="1">Dr. Rohit Kumar</option>
                                    <option value="2">Dr. Richa Prasad</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                    style="height: 55px" />
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                    style="height: 55px" />
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Date" data-target="#date1"
                                        data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select Time</option>
                                    <option value="1">09:00 AM</option>
                                    <option value="2">09:30 AM</option>
                                    <option value="3">10:00 AM</option>
                                    <option value="4">10:30 AM</option>
                                    <option value="5">11:00 AM</option>
                                    <option value="6">11:30 AM</option>
                                    <option value="7">12:00 PM</option>
                                    <option value="8">12:30 PM</option>
                                    <option value="9">01:00 PM</option>
                                    <option value="10">04:00 PM</option>
                                    <option value="11">04:30 PM</option>
                                    <option value="12">05:00 PM</option>
                                    <option value="13">05:30 PM</option>
                                    <option value="14">06:00 PM</option>
                                    <option value="15">06:30 PM</option>
                                    <option value="16">07:00 PM</option>
                                    <option value="17">07:30 PM</option>
                                    <option value="18">08:00 PM</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-light w-100 py-3" type="submit">
                                    Make Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->



<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-5 wow" style="min-height: 400px;" data-aos="fade-right">
                <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                    <img class="w-100 h-100" src="{{ asset('assets/img/kaavya-3.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title mb-5" data-aos="fade-down">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                    <h6 class="mb-0 text-success">We Offer The Best Quality Orthopedic Services</h6>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 service-item" data-aos="fade-up">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/joint-replacement.jpg') }}"
                                alt="">
                        </div>
                        <div class="position-relative bg-success rounded-bottom text-center p-4">
                            <h6 class="m-0 text-white">Joint Replacement</h6>
                        </div>
                    </div>
                    <div class="col-md-6 service-item" data-aos="fade-left">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/arthoscopy.jpg') }}" alt="">
                        </div>
                        <div class="position-relative bg-success rounded-bottom text-center p-4">
                            <h6 class="m-0 text-white">Arthoscopy</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item" data-aos="zoom-out">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/shoulder-surgery.jpg') }}"
                                alt="">
                        </div>
                        <div class="position-relative bg-success rounded-bottom text-center p-4">
                            <h6 class="m-0 text-white">Advanced Shoulder Surgery</h6>
                        </div>
                    </div>
                    <div class="col-md-6 service-item" data-aos="zoom-in">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Children-orthopedic.jpg') }}"
                                alt="">
                        </div>
                        <div class="position-relative bg-success rounded-bottom text-center p-4">
                            <h6 class="m-0 text-white">Children Orthopedics</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item">
                <div class="position-relative bg-success bg-appointment rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4"
                    data-aos="fade-up">
                    <h4 class="text-white mt-0 mb-3">Make Appointment</h4>
                    <h5 class="text-white mb-3">Kaavya Hospital</h5>
                    <small class="text-white mb-3">The foundation was led in the year 2015. At Kaavya Orthopedic Clinic
                        the
                        complete team of specialists led by the founder and visionary Dr Rohit Kumar who is an
                        Orthopedic Consultant and Surgeon is a leader in orthopedic healthcare.</small>
                    <h5 class="text-white mb-0"><i class="bi bi-telephone text-dark me-2"></i>+0780 883 8383</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div id="patients" class="container-fluid bg-info bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel rounded p-5" data-aos="fade-down" style="height:290px;">
                    <div class="testimonial-item text-center text-white" style="padding-top: 50px;">
                        {{-- <img class="img-fluid mx-auto rounded mb-4" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                            alt=""> --}}
                        <small class="fs-0">"Clinical care is outstanding at Kaavya Orthopedic, but what really sets
                            them apart is that Dr. Rohit is exceptionally genius in Orthopedic surgery. He truly cares
                            about the well-being of his patients."</small>
                        <hr class="mx-auto w-25">
                        <h6 class="text-white mb-0">Pooja Kadma</h6>
                        <h6 class="text-white mb-0">Jamshedpur</h6>
                    </div>
                    <div class="testimonial-item text-center text-white" style="padding-top: 40px;">
                        {{-- <img class="img-fluid mx-auto rounded mb-4" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                            alt=""> --}}
                        <small class="fs-0">"Slowly over the years my mobility was reducing. And after few months
                            being on crutches, I found out about Dr. Rohit. Four months later I can walk without pain, I
                            can skip and jump, and I have forgotten where I put my crutches. I am extremely grateful to
                            him for making me able to walk freely on my feet. Thank you."</small>
                        <hr class="mx-auto w-25">
                        <h6 class="text-white mb-0">Rakesh Sakchi</h6>
                        <h6 class="text-white mb-0">Jamshedpur</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div id="about-doctor" class="container-fluid py-5">
    <div class="container">
        <div id="dr" class="row g-5">
            <div class="section-title" data-aos="zoom-in">
                <h5 id="dr-rohit.html" class="position-relative d-inline-block text-primary text-uppercase">Meet Our
                    Doctors</h5>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item" data-aos="fade-right">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="{{ asset('assets/img/Doctor-Rohit.jpg') }}"
                            alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-2 pt-5">
                        <h6 class="mb-2">Dr. ROHIT KUMAR</h6>
                        <small class="text-primary mb-0">Dr. Rohit Kumar is a graduate <strong>(MBBS)</strong> from
                            <strong>Mysore Medical Collage.</strong> He has done his master <strong>(MS ortho)</strong>
                            form the
                            prestigious <strong>Calcutta Medical Collage, Kolkata.</strong> He then acquired
                            <strong>MRCS</strong>(Membership of Royal Collage of Surgeons) from <strong>Royal
                                Collage of surgeons Glasgow (UK).</strong>
                        </small>
                    </div>
                </div>
            </div>
            <div id="richa" class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item" data-aos="fade-left">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="{{ asset('assets/img/doctor-richa.jpg') }}"
                            alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-5 pt-5">
                        <h6 class="mb-2">Dr. RICHA PRASAD </h6>
                        <small class="text-primary mb-0">Genaral Physician</small>
                        <small class="text-primary mb-0">MBBS, Dip in Family Medicine(<strong>CMC
                                Vellore</strong>)</small>
                        <small class="text-primary mb-0">PG Diploma - Clinical Endocrinology & Diabetes
                            (<strong>Royal
                                Collage of Physician, UK</strong>)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<x-footer />
