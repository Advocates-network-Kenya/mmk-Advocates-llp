@extends('frontend.layouts.base')

@section('content')
    <style>
        .btn-team-cta {
            background: #880411 !important;
            color: #ffffff !important;
            border: none;
            transition: 0.3s;
        }

        .btn-team-cta:hover {
            background: #880410 !important;
            color: #ffffff !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .team-item img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }
    </style>

    @include('frontend.inc.banner')
    @include('frontend.inc.team')

    {{-- Our Partners  --}}
    <div class="team pb-5">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Partners</h2>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=1" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM, Advocate of the High Court</h6>
                            <p class="card-text text-muted small">Specializes in Corporate Law, providing strategic legal
                                counsel to domestic and international corporations.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=2" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), Dip. KSL</h6>
                            <p class="card-text text-muted small">A dedicated litigator with extensive experience in Family
                                Law and Dispute Resolution.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=3" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM</h6>
                            <p class="card-text text-muted small">Focuses on Commercial Litigation and Intellectual Property
                                rights protection.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Our Team Associates - --}}
    <div class="team pb-5">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Associates</h2>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=1" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM, Advocate of the High Court</h6>
                            <p class="card-text text-muted small">Specializes in Corporate Law, providing strategic legal
                                counsel to domestic and international corporations.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=2" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), Dip. KSL</h6>
                            <p class="card-text text-muted small">A dedicated litigator with extensive experience in Family
                                Law and Dispute Resolution.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=3" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM</h6>
                            <p class="card-text text-muted small">Focuses on Commercial Litigation and Intellectual Property
                                rights protection.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Our Pararegal --}}
    <div class="team pb-5">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Paralegal</h2>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=1" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM, Advocate of the High Court</h6>
                            <p class="card-text text-muted small">Specializes in Corporate Law, providing strategic legal
                                counsel to domestic and international corporations.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=2" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), Dip. KSL</h6>
                            <p class="card-text text-muted small">A dedicated litigator with extensive experience in Family
                                Law and Dispute Resolution.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=3" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM</h6>
                            <p class="card-text text-muted small">Focuses on Commercial Litigation and Intellectual
                                Property rights protection.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ourteam - Finnance and ict --}}
    <div class="team pb-5">
        <div class="container">
            <div class="section-header text-center">
                <h2>Finnance and ICT</h2>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=1" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM, Advocate of the High Court</h6>
                            <p class="card-text text-muted small">Specializes in Corporate Law, providing strategic legal
                                counsel to domestic and international corporations.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=2" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), Dip. KSL</h6>
                            <p class="card-text text-muted small">A dedicated litigator with extensive experience in Family
                                Law
                                and Dispute Resolution.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="https://picsum.photos/400/350?random=3" class="card-img-top" alt="Advocate Name">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">Advocate Name</h4>
                            <h6 class="text-primary mb-3">LLB (Hons), LLM</h6>
                            <p class="card-text text-muted small">Focuses on Commercial Litigation and Intellectual
                                Property
                                rights protection.</p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- cta --}}
             <div class="row">
                <div class="col-12 text-center mt-4">
                    <a class="cta-button" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
@endsection
