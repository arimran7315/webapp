<main>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
                        <h1>Frequently Asked Questions</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion accordion-border-bottom" id="accordionFAQ">
                        @php
                            $maxId = $faqs->max('id');
                        @endphp
                        @if ($faqs->isNotEmpty())
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header accordion-button h5 border-0 {{ $faq->id === $maxId ? 'active' : '' }}"
                                        id="heading-faq-{{ $faq->id }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-faq-{{ $faq->id }}"
                                        aria-expanded="{{ $faq->id === $maxId ? 'true' : 'false' }}"
                                        aria-controls="collapse-faq-{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </h2>
                                    <div id="collapse-faq-{{ $faq->id }}"
                                        class="accordion-collapse collapse border-0 {{ $faq->id === $maxId ? 'show' : '' }}"
                                        aria-labelledby="heading-faq-{{ $faq->id }}"
                                        data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body py-0 content">{!! $faq->answer !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
