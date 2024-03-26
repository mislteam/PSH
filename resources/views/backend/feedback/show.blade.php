@extends('layouts.backend')
@section('title', 'Feedback View Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-5">
        <h2 class="mt-3 mb-2">Customer Feedback Form Detail</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Customer Feedback Form Detail</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-7">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="{{route('feedback.index')}}" class="btn btn-primary m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="project-list">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">Customer Name</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ $service->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">E-Mail Address</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ $service->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">Phone Number</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ $service->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">Address</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ $service->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">Series Number</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ $service->series_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">Product Type</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ $service->product_type }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">(၀န်ထမ်းများ၏ ၀န်ဆောင်မှု) STAFF & CREW MEMBERS</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">1. (ပြေပြစ်စွာပြောဆိုဆက်ဆံနိုင်မှု) Communication Skills</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->communication) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">2. (ဖော်ရွေစွာ ကူညီပေးနိုင်မှု) Friendliness,helpfulness</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->friendliness) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">3. (စက်သုံးစွဲသူတောင်းဆိုချက်အားဖြည့်စည်းပေးနိုင်မှု)Follow up of Customer request</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->customer_request) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">4. (၀န်ထမ်းများစွမ်းဆောင်ရည်) Staff Attitude and Performance</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->performance) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">5. (ချို့ယွင်းမှုအားစစ်ဆေးရာတွင် စေ့စပ်သေချာမှုရှိခြင်း) Meticulous Inspection</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->meticulous_inspection) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">6. (ပစ္စည်းပို့ဆောင်ရာတွင် တိကျမှုရှိခြင်း) Delivery Time</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->delivery_time) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">(စက်ပစ္စည်း၏ အရည်အသွေး) PRODUCT QUALITY</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">1. (အချိန်နှင့်တပြေးညီ ၀န်ဆောင်မှုပေးခြင်း) Service In time</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->service_time) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">2. (ကုန်ပစ္စည်းကြံ့ခိုင်မှု) Product Structure</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->product_structure) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">3. (စက်အပိုပစ္စည်းစျေးနူန်း) Spare part Charges</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->spare_part_charges) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">4. (ပြင်ပြီးစက်သုံးစွဲရာတွင် အဆင်ပြေ ယုံကြည်စိတ်ချမှုရှိခြင်း) Confidence after Service</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->confidence_after_service) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">5. (အလေးချိန် ချိန််တွယ်ရာတွင် တိကျမှန်ကန်မှုရှိခြင်း) Accuracy Weight</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->accuracy_weight) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">6. (သုံးစွဲရာတွင် လွယ်ကူမှု) Easy to use</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->easy_to_use) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">7. (နည်းပညာဆိုင်ရာ အရည်အသွေး) Technical Quality</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->technical_quality) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">(၀န်ဆောင်မှုပေးခြင်း) Overall rating of services</h6>
                                    </td>
                                    <td class="project-title">
                                        {{ mapCommunication($service->overall_rating_services) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">SUGGESTIONS TO IMPROVE OUR SERVICE</h6>
                                    </td>
                                    <td class="project-title">
                                        {{$service->suggesstions}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h6 class="pb-0 mb-0 fw-bold">OTHER COMPLAINT</h6>
                                    </td>
                                    <td class="project-title">
                                        {{$service->complaint}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop