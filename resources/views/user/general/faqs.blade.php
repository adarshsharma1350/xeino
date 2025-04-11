@extends('layout.layout')
@section('title', 'FAQs')
@section('content')

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">FAQ</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="mb-3">Frequently Asked Questions</h3>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-xl-6">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item accordion-item-faq shadow-sm">
                                    @foreach ($faqs as $faq)

                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                {{ $faq->question }}
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body pb-0">
                                                <p class="mb-0 text-muted"> {{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="faqModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="faqModalLabel">Add New FAQ</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="">
                                                    <div class="mb-3">
                                                        <label for="faq-question" class="form-label">Question</label>
                                                        <input type="text" class="form-control" id="faq-question"
                                                            name="question">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="faq-answer" class="form-label">Answer</label>
                                                        <textarea class="form-control" id="faq-answer"
                                                            name="answer"></textarea>
                                                    </div>
                                                    <button class="btn btn-outline-dark" type="">Cancel</button>
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#faqModal">
                                    Add New FAQ
                                </button>

                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $('#faqModal').on('show.bs.modal', function () {
                            });
                        });
                    </script>
@endsection

                <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
                <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
                <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>
                <script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
                <script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
                <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
                <script src="{{ asset('assets/js/app.js') }}"></script>

