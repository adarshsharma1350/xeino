@extends('layout.layout')
@section('title', 'Maps')

@section('content')


    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Google</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                <li class="breadcrumb-item active">Google</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Marker Map</h5>
                </div>
                <div class="card-body">
                    <div id="gmaps-markers" class="google-maps"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2383.5597326705915!2d80.87578316099462!3d26.77001873766382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d26.7699279!2d80.8748262!4m5!1s0x399bf90a0e9a6b5f%3A0xe7dd8ac0778294aa!2sAmausi%20Metro%20Station%2C%20Kanpur%20Road%2C%20Vijayanagar%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh!3m2!1d26.771479799999998!2d80.8785741!5e1!3m2!1sen!2sin!4v1743814133320!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div>

        {{-- <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Overlay Map</h5>
                </div>
                <div class="card-body">
                    <div id="gmaps-overlay" class="google-maps"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2383.5597326705915!2d80.87578316099462!3d26.77001873766382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d26.7699279!2d80.8748262!4m5!1s0x399bf90a0e9a6b5f%3A0xe7dd8ac0778294aa!2sAmausi%20Metro%20Station%2C%20Kanpur%20Road%2C%20Vijayanagar%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh!3m2!1d26.771479799999998!2d80.8785741!5e1!3m2!1sen!2sin!4v1743814133320!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Street View Panoramas Map</h5>
                </div>
                <div class="card-body">
                    <div id="gmaps-streetview" class="google-maps"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2383.5597326705915!2d80.87578316099462!3d26.77001873766382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d26.7699279!2d80.8748262!4m5!1s0x399bf90a0e9a6b5f%3A0xe7dd8ac0778294aa!2sAmausi%20Metro%20Station%2C%20Kanpur%20Road%2C%20Vijayanagar%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh!3m2!1d26.771479799999998!2d80.8785741!5e1!3m2!1sen!2sin!4v1743814133320!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Type Map</h5>
                </div>
                <div class="card-body">
                    <div id="gmaps-types" class="google-maps"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2383.5597326705915!2d80.87578316099462!3d26.77001873766382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d26.7699279!2d80.8748262!4m5!1s0x399bf90a0e9a6b5f%3A0xe7dd8ac0778294aa!2sAmausi%20Metro%20Station%2C%20Kanpur%20Road%2C%20Vijayanagar%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh!3m2!1d26.771479799999998!2d80.8785741!5e1!3m2!1sen!2sin!4v1743814133320!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Polygons Map</h5>
                </div>
                <div class="card-body">
                    <div id="gmaps-polygons" class="google-maps"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2383.5597326705915!2d80.87578316099462!3d26.77001873766382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d26.7699279!2d80.8748262!4m5!1s0x399bf90a0e9a6b5f%3A0xe7dd8ac0778294aa!2sAmausi%20Metro%20Station%2C%20Kanpur%20Road%2C%20Vijayanagar%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh!3m2!1d26.771479799999998!2d80.8785741!5e1!3m2!1sen!2sin!4v1743814133320!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Routes Map</h5>
                </div>
                <div class="card-body">
                    <div id="gmaps-route" class="google-maps"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2383.5597326705915!2d80.87578316099462!3d26.77001873766382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d26.7699279!2d80.8748262!4m5!1s0x399bf90a0e9a6b5f%3A0xe7dd8ac0778294aa!2sAmausi%20Metro%20Station%2C%20Kanpur%20Road%2C%20Vijayanagar%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh!3m2!1d26.771479799999998!2d80.8785741!5e1!3m2!1sen!2sin!4v1743814133320!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div> --}}

    </div>
@endsection
