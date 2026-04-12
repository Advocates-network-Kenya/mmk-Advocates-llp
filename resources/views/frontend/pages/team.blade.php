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
                {{-- team card start here --}}
                @foreach ($partners as $partner)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card team-item border-0 shadow-sm">
                            <img src="{{ storage_url($partner->image) }}" class="card-img-top" alt="Advocate Name">
                            <div class="card-body text-center">
                                <h4 class="font-weight-bold">{{ $partner->name }}</h4>
                                <h6 class="text-primary mb-3">{{ $partner->qualifications }}</h6>
                                <p class="card-text text-muted small">
                                    {{ Str::limit($partner->content, 130) }}
                                    .</p>
                                <a href="#" class="cta-button">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- team card end here --}}

            </div>
        </div>
    </div>
    {{-- end our Partners --}}
    {{-- Our Team Associates - --}}
    <div class="team pb-5">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Associates</h2>
            </div>
            <div class="row">
                {{-- Associates card start here --}}
                @foreach ($associates as $associate)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card team-item border-0 shadow-sm">
                            <img src="{{ storage_url($associate->image) }}" class="card-img-top"
                                alt="
                        {{ $associate->name }}">
                            <div class="card-body text-center">
                                <h4 class="font-weight-bold">{{ $associate->name }}</h4>
                                <h6 class="text-primary mb-3">{{ $associate->qualifications }}</h6>
                                <p class="card-text text-muted small">
                                    {{ Str::limit($associate->content, 130) }}.
                                </p>
                                <a href="#" class="cta-button">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Associates card end here   --}}


            </div>
        </div>
    </div>
    {{-- Our Lawyers --}}
    <div class="team pb-5">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Lawyers</h2>
            </div>
            <div class="row">

                {{-- lawyer card start here --}}
                @foreach ($lawyers as $lawyer)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card team-item border-0 shadow-sm">
                            <img src="{{ storage_url($lawyer->image) }}" class="card-img-top" alt="{{
                                $lawyer->name }}">
                            <div class="card-body text-center">
                                <h4 class="font-weight-bold">{{ $lawyer->name }}</h4>
                                <h6 class="text-primary mb-3">{{$lawyer->qualifications }}</h6>
                                <p class="card-text text-muted small">
                                    {{ Str::limit($lawyer->content, 130) }}
                                .</p>
                                <a href="#" class="cta-button">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- lawyer card end --}}

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

                {{-- Paralegal card start here --}}
                @foreach ($paralegals as $paralegal)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card team-item border-0 shadow-sm">
                            <img src="{{ storage_url($paralegal->image) }}" class="card-img-top" alt="{{
                                $paralegal->name }}">
                            <div class="card-body text-center">
                                <h4 class="font-weight-bold">{{ $paralegal->name }}</h4>
                                <h6 class="text-primary mb-3">{{$paralegal->qualifications }}</h6>
                                <p class="card-text text-muted small">
                                    {{ Str::limit($paralegal->content, 130) }}
                                .</p>
                                <a href="#" class="cta-button">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- paralegal card end --}}

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


                {{-- finance and ict card start here--}}
                @foreach ($others as $other)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-item border-0 shadow-sm">
                        <img src="{{ storage_url($other->image) }}" class="card-img-top" alt="{{ $other->name }}">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">{{ $other->name }}</h4>
                            <h6 class="text-primary mb-3">{{$other->qualifications }}</h6>
                            <p class="card-text text-muted small">
                                {{ Str::limit($other->content, 130) }}.
                            </p>
                            <a href="#" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                

                {{-- finance and ict card end here--}}

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
