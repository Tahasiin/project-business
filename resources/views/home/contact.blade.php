@extends('home.master.file')

@section('title')
    @foreach($templateData as $data)
        {{$data->company_name}} Limited
    @endforeach
@endsection

@section('left-section1')
    @include('home.master.parts.contact')
@endsection

@section('content')
    <div id="tooplate_content" style="border-left: 1px solid grey;padding-left: 10%">
        <h2>Contact Information</h2>
        <h4>
            <span class="text-primary">{{Session::get('success')}}</span>
            <span class="text-danger">{{Session::get('error')}}</span>
        </h4>
        <div id="contact_form" style="margin-top: 5%">
            <form method="POST" action="{{route('sendMessage')}}">
                {{csrf_field()}}
                <table style="border-spacing:2em;border-collapse:separate;">
                    <tr style="margin-bottom: 50px">
                        <td><i class="fas fa-user"></i>&emsp;Your Name</td>
                        <td><input type="text" name="name" placeholder="Enter your name" required></td>
                        <span class="text-danger">{{ $errors -> has('name') ? $errors ->first('name') : '' }}</span>
                    </tr>
                    <tr>
                        <td><i class="fas fa-home"></i>&emsp;Your Country</td>
                        <td><input type="text" name="country" placeholder="Enter your country" required></td>
                        <span
                            class="text-danger">{{ $errors -> has('country') ? $errors ->first('country') : '' }}</span>
                    </tr>
                    <tr>
                        <td><i class="fas fa-phone"></i>&emsp;Your Phone</td>
                        <td><input type="text" name="phone" placeholder="Enter phone number"></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-paper-plane"></i>&emsp;Your Email</td>
                        <td><input type="text" name="email" placeholder="Enter email number" required></td>
                        <span class="text-danger">{{ $errors -> has('email') ? $errors ->first('email') : '' }}</span>
                    </tr>
                    <tr>
                        <td><i class="fas fa-user"></i><i class="fas fa-question"></i>&emsp;Customer Type</td>
                        <td>
                            <select name="customer_type" style="width: 180px" required>
                                <option value="">Select</option>
                                <option value="new">New Customer</option>
                                <option value="existing">Existing Customer</option>
                            </select>
                            <span
                                class="text-danger">{{ $errors -> has('customer_type') ? $errors ->first('customer_type') : '' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-level-up-alt"></i>&emsp;Priority Level</td>
                        <td>
                            <select name="priority_level" style="width: 180px" required>
                                <option value="">Select</option>
                                <option value="normal">Normal</option>
                                <option value="high">High</option>
                                <option value="emergency">Emergency</option>
                            </select>
                            <span
                                class="text-danger">{{ $errors -> has('priority_level') ? $errors ->first('priority_level') : '' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-search"></i>&emsp;Query Type</td>
                        <td>
                            <select name="query_type" style="width: 180px" required>
                                <option value="">Select</option>
                                <option value="support">Support</option>
                                <option value="payment">Payment</option>
                                <option value="report">Report</option>
                                <option value="emergency">Information</option>
                            </select>
                            <span
                                class="text-danger">{{ $errors -> has('query_type') ? $errors ->first('query_type') : '' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-envelope"></i>&emsp;Your Message</td>
                        <td>
                            <textarea style="width: 300px;min-height: 150px" placeholder="Write something...."
                                      name="message" required></textarea>
                            <span
                                class="text-danger">{{ $errors -> has('message') ? $errors ->first('message') : '' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-block btn-dark">Send</button>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
@endsection
