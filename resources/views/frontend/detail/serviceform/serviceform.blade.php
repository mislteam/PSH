@extends('layouts.frontend')
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0"
        style="background-image: url(img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="index.html" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Customer Feedback Form</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Customer Feedback Form</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START CUSTOMER FEEDBACK -->
    <div class="container py-5 my-5">
        <div class="row align-items-center">
            <div id="requestConsultation" class="col-lg-12">
                <div class="text-center">
                    <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Service Form</h3>
                    <h2 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">စက်ပစ္စည်း
                        ၀ယ်ယူသူ၏ အကြံပြုချက် (Customer Feedback Form)</h2>
                </div>
                <form class="contact-form custom-form-style-1 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                    action="{{route('servicestore')}}" method="POST" id="myForm">
                    @csrf
                    {{-- @if(Session::has('success'))
                        <div class="contact-form-success alert alert-success mt-4">
                            <strong>Success!</strong> {{ Session::get('success') }}
                        </div>
                    @endif --}}

                    <div class="contact-form-error alert alert-success d-none mt-4">
                        <strong>Send successfully!</strong> {{ Session::get('success') }}
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                class="form-control border-radius-0" name="name" id="name" required
                                placeholder="Customer's Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="email" value="" data-msg-required="Please enter your email address."
                                data-msg-email="Please enter a valid email address." maxlength="100"
                                class="form-control border-radius-0" name="email" id="email" required
                                placeholder="E-mail *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number."
                                maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required
                                placeholder="Phone *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your address"
                                data-msg-email="Please enter address." maxlength="100"
                                class="form-control border-radius-0" name="address" id="address" required
                                placeholder="Address *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter series number"
                                data-msg-email="Please enter series number" maxlength="100"
                                class="form-control border-radius-0" name="series_number" id="product-type" required
                                placeholder="Series Number *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter type of product"
                                data-msg-email="Please enter type of product" maxlength="100"
                                class="form-control border-radius-0" name="product_type" id="product-type" required
                                placeholder="Type of product *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <label class="font-weight-bold text-3 mb-2">(၀န်ထမ်းများ၏ ၀န်ဆောင်မှု) STAFF & CREW
                                MEMBERS</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label> 1. (ပြေပြစ်စွာပြောဆိုဆက်ဆံနိုင်မှု) Communication Skills</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="communication" value="0" {{
                                            old('communication')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="communication" value="1" {{
                                            old('communication')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="communication" value="2" {{
                                            old('communication')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="communication" value="3" {{
                                            old('communication')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="communication" value="4" {{
                                            old('communication')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label> 2. (ဖော်ရွေစွာ ကူညီပေးနိုင်မှု) Friendliness,helpfulness</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="friendliness" value="0" {{
                                            old('friendliness')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="friendliness" value="1" {{
                                            old('friendliness')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="friendliness" value="2" {{
                                            old('friendliness')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="friendliness" value="3" {{
                                            old('friendliness')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="friendliness" value="4" {{
                                            old('friendliness')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label> 3. (စက်သုံးစွဲသူတောင်းဆိုချက်အားဖြည့်စည်းပေးနိုင်မှု)Follow up of Customer
                                        request</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="customer_request" value="0"
                                            {{ old('customer_request')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="customer_request" value="1"
                                            {{ old('customer_request')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="customer_request" value="2"
                                            {{ old('customer_request')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="customer_request" value="3"
                                            {{ old('customer_request')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="customer_request" value="4"
                                            {{ old('customer_request')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>4. (၀န်ထမ်းများစွမ်းဆောင်ရည်) Staff Attitude and Performance</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="performance" value="0" {{
                                            old('performance')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="performance" value="1" {{
                                            old('performance')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="performance" value="2" {{
                                            old('performance')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="performance" value="3" {{
                                            old('performance')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="performance" value="4" {{
                                            old('performance')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>5. (ချို့ယွင်းမှုအားစစ်ဆေးရာတွင် စေ့စပ်သေချာမှုရှိခြင်း) Meticulous
                                        Inspection</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="meticulous_inspection"
                                            value="0" {{ old('meticulous_inspection')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="meticulous_inspection"
                                            value="1" {{ old('meticulous_inspection')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="meticulous_inspection"
                                            value="2" {{ old('meticulous_inspection')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="meticulous_inspection"
                                            value="3" {{ old('meticulous_inspection')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="meticulous_inspection"
                                            value="4" {{ old('meticulous_inspection')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>6. (ပစ္စည်းပို့ဆောင်ရာတွင် တိကျမှုရှိခြင်း) Delivery Time</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="delivery_time" value="0" {{
                                            old('delivery_time')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="delivery_time" value="1" {{
                                            old('delivery_time')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="delivery_time" value="2" {{
                                            old('delivery_time')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="delivery_time" value="3" {{
                                            old('delivery_time')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="delivery_time" value="4" {{
                                            old('delivery_time')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <label class="font-weight-bold text-3 mb-2">(စက်ပစ္စည်း၏ အရည်အသွေး) PRODUCT QUALITY</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label> 1. (အချိန်နှင့်တပြေးညီ ၀န်ဆောင်မှုပေးခြင်း) Service In time</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service_time" value="0" {{
                                            old('service_time')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service_time" value="1" {{
                                            old('service_time')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service_time" value="2" {{
                                            old('service_time')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service_time" value="3" {{
                                            old('service_time')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service_time" value="4" {{
                                            old('service_time')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>2. (ကုန်ပစ္စည်းကြံ့ခိုင်မှု) Product Structure</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="product_structure" value="0"
                                            {{ old('product_structure')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="product_structure" value="1"
                                            {{ old('product_structure')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="product_structure" value="2"
                                            {{ old('product_structure')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="product_structure" value="3"
                                            {{ old('product_structure')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="product_structure" value="4"
                                            {{ old('product_structure')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>3. (စက်အပိုပစ္စည်းစျေးနူန်း) Spare part Charges</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spare_part_sharges" value="0"
                                            {{ old('spare_part_sharges')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spare_part_sharges" value="1"
                                            {{ old('spare_part_sharges')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spare_part_sharges" value="2"
                                            {{ old('spare_part_sharges')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spare_part_sharges" value="3"
                                            {{ old('spare_part_sharges')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spare_part_sharges" value="4"
                                            {{ old('spare_part_sharges')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>4. (ပြင်ပြီးစက်သုံးစွဲရာတွင် အဆင်ပြေ ယုံကြည်စိတ်ချမှုရှိခြင်း) Confidence
                                        after Service</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="confidence_after_service"
                                            value="0" {{ old('confidence_after_service')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="confidence_after_service"
                                            value="1" {{ old('confidence_after_service')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="confidence_after_service"
                                            value="2" {{ old('confidence_after_service')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="confidence_after_service"
                                            value="3" {{ old('confidence_after_service')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="confidence_after_service"
                                            value="4" {{ old('confidence_after_service')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>5. (အလေးချိန် ချိန််တွယ်ရာတွင် တိကျမှန်ကန်မှုရှိခြင်း) Accuracy
                                        Weight</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="accuracy_weight" value="0" {{
                                            old('accuracy_weight')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="accuracy_weight" value="1" {{
                                            old('accuracy_weight')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="accuracy_weight" value="2" {{
                                            old('accuracy_weight')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="accuracy_weight" value="3" {{
                                            old('accuracy_weight')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="accuracy_weight" value="4" {{
                                            old('accuracy_weight')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>6. (သုံးစွဲရာတွင် လွယ်ကူမှု) Easy to use</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="easy_to_use" value="0" {{
                                            old('easy_to_use')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="easy_to_use" value="1" {{
                                            old('easy_to_use')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="easy_to_use" value="2" {{
                                            old('easy_to_use')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="easy_to_use" value="3" {{
                                            old('easy_to_use')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="easy_to_use" value="4" {{
                                            old('easy_to_use')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>7. (နည်းပညာဆိုင်ရာ အရည်အသွေး) Technical Quality</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="technical_quality" value="0"
                                            {{ old('technical_quality')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="technical_quality" value="1"
                                            {{ old('technical_quality')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="technical_quality" value="2"
                                            {{ old('technical_quality')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="technical_quality" value="3"
                                            {{ old('technical_quality')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="technical_quality" value="4"
                                            {{ old('technical_quality')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>(၀န်ဆောင်မှုပေးခြင်း) Overall rating of services</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="overall_rating_services"
                                            value="0" {{ old('overall_rating_services')=='0' ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="inlineRadio1 text-color-primary">အလွန်ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="overall_rating_services"
                                            value="1" {{ old('overall_rating_services')=='1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ကောင်း</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="overall_rating_services"
                                            value="2" {{ old('overall_rating_services')=='2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">သင့်</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="overall_rating_services"
                                            value="3" {{ old('overall_rating_services')=='3' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ညံ့</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="overall_rating_services"
                                            value="4" {{ old('overall_rating_services')=='4' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">အလွန်ညံ့</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" rows="9" class="form-control border-radius-0" name="message"
                                id="message"
                                placeholder="(ကျေးဇူးပြု၍ လူကြီးမင်း၏ စက်သုံးစွဲမှု အတွေ့အကြုံများကိုဖြည့်ပေးစေလိုပါသည်) SUGGESTIONS TO IMPROVE OUR SERVICE;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" rows="9" class="form-control border-radius-0" name="complaint"
                                id="message"
                                placeholder="(စက်သုံးစွဲရာတွင် တွေ့ရှိရသည့် အခက်အခဲများနှင့် အဆင်မပြေမှုများ) COMPLAINT (if any);"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col text-lg-end mb-0">
                            <button type="submit"
                                class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation"
                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350"
                                data-loading-text="Loading..." id="submitButton">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END CUSTOMER FEEDBACK -->
</div>
@stop
{{-- <script>
    // Add event listener to submit button
    document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('submitButton').addEventListener('click', function(event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Submit the form using JavaScript
        document.getElementById('myForm').submit();
        
        // Reload the page after a short delay (adjust as needed)
        setTimeout(function() {
            location.reload();
        }, 1000); // Reload after 1 second (1000 milliseconds)
    });
});
</script> --}}