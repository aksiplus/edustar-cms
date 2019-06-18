@extends('install.layout')

@section('content')
<div id="wizard3" role="application" class="wizard clearfix vertical">
    <div class="steps clearfix">
        <ul role="tablist">
            <li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard3-t-0"
                    href="#wizard3-h-0" aria-controls="wizard3-p-0"><span class="current-info audible">current step:
                    </span><span class="number">1</span> <span class="title">Personal Information</span></a></li>
            <li role="tab" class="disabled" aria-disabled="true"><a id="wizard3-t-1" href="#wizard3-h-1"
                    aria-controls="wizard3-p-1"><span class="number">2</span> <span class="title">Billing
                        Information</span></a></li>
            <li role="tab" class="disabled last" aria-disabled="true"><a id="wizard3-t-2" href="#wizard3-h-2"
                    aria-controls="wizard3-p-2"><span class="number">3</span> <span class="title">Payment
                        Details</span></a></li>
        </ul>
    </div>
    <div class="content clearfix">
        <h3 id="wizard3-h-0" tabindex="-1" class="title current">Personal Information</h3>
        <section id="wizard3-p-0" role="tabpanel" aria-labelledby="wizard3-h-0" class="body current"
            aria-hidden="false">
            <p>Try the keyboard navigation by clicking arrow left or right!</p>
        </section>
        <h3 id="wizard3-h-1" tabindex="-1" class="title">Billing Information</h3>
        <section id="wizard3-p-1" role="tabpanel" aria-labelledby="wizard3-h-1" class="body" aria-hidden="true"
            style="display: none;">
            <p>Wonderful transition effects.</p>
        </section>
        <h3 id="wizard3-h-2" tabindex="-1" class="title">Payment Details</h3>
        <section id="wizard3-p-2" role="tabpanel" aria-labelledby="wizard3-h-2" class="body" aria-hidden="true"
            style="display: none;">
            <p>The next and previous buttons help you to navigate through your content.</p>
        </section>
    </div>
    <div class="actions clearfix">
        <ul role="menu" aria-label="Pagination">
            <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>
            <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li>
            <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
        </ul>
    </div>
</div>


@endsection
