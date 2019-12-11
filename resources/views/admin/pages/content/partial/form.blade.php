<form method="POST" action="{{ $route }}" aria-label="{{ __($action) }}">
    @csrf
    @if(isset($method))
        @method($method)
    @endif

    @if(isset($params))
        @foreach($params as $param => $value)
            <input type="hidden"
                   id="{{$param}}"
                   value="{{$value}}"
                   name="{{"params[$param]"}}"/>
        @endforeach
    @endif

    @include('admin.common.alerts.error')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="type" class="col-form-label">{{ __('Type') }}</label>
                <select
                        id="type"
                        class="form-control {{ $errors && $errors->has('type') ? ' is-invalid' : '' }}"
                        name="type">
                    @foreach($contentTypes as $label => $value)
                        <option
                                {{isset($params) && isset($params['content-type']) && strtoupper(str_replace(' ', '_', $params['content-type'])) !== $value ? 'disabled' : ''  }}
                                {{isset($record) && isset($record->type) && $record->type === $value ? 'selected="selected"' : ''}}
                                value="{{ $value }}">{{ $label }}
                        </option>
                    @endforeach
                </select>

                @if ($errors && $errors->has('type'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_type" class="col-form-label">{{ __('Sub Type') }}</label>
                <select
                        id="sub_type"
                        class="form-control {{ $errors && $errors->has('sub_type') ? ' is-invalid' : '' }}"
                        name="sub_type"
                        {{isset($record) && isset($record->type) && $record->type !== "APARTMENT" ? 'disabled="disabled"' : ''}}>
                    @foreach($contentSubTypes as $label => $value)
                        <option
                                {{isset($params) && isset($params['content-sub-type']) && strtoupper(str_replace(' ', '_', $params['content-sub-type'])) !== $value ? 'disabled' : ''  }}
                                {{isset($record) && isset($record->sub_type) && $record->sub_type === $value ? 'selected="selected"' : ''}}
                                value="{{ $value }}">{{ $label }}
                        </option>
                    @endforeach
                </select>

                @if ($errors && $errors->has('sub_type'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('sub_type') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="content" class="col-form-label">{{ __('Content') }}</label>
                <textarea
                        id="content"
                        class="tmce form-control{{ $errors && $errors->has('content') ? ' is-invalid' : '' }}"
                        name="content">{{ isset($record) && $record->content ? $record->content : old('content') }}
                    
                        @if(old('content') == null && isset($params) && isset($params['content-sub-type']) && $params['content-sub-type']=='details')
                            <div class="row">
                            <div class="deatils head-para-apart-inner">
                            <h3>Details</h3>
                            </div>
                            </div>
                            <div class="row">
                            <div class="details-para details-para-bottom">
                            <p class="inner-apart-para">Free Tram Zone.<br>8 minutes to RMIT.<br>11 minutes to Melbourne University.<br>20 minutes to Monash Caulfield.<br>This great size studio apartment featuring Nordic furniture, fully equipped kitchen with modern appliances. An open-plan bedroom / lounge / dining / kitchen area and large bathroom.<br>Secure building access to foyer and lift.<br>As we manage all 20 ‘St Andrews’ apartments, you can rest assured that your neighbours will not be weekend ‘Airbnb’ type party guests.<br>The location of the apartment allows for fantastic inner city living. On one end of the street, the beautiful lush Fitzroy gardens, on the other ’The Paris End” of Melbourne CBD. Cafes, restaurants, bars, clubs, theatres, cinemas, pubs, live bands, shopping… the list just goes on and on!.<br>Get into the Melbourne sports culture by walking over to the MCG for the footy or cricket or the Rod Laver Arena for the tennis.<br>And of course all live concerts played at the Melbourne Park Arenas.<br>There are many bike tracks close by. Most notable that along the Yarra River just 500 m away.<br>You will have sole occupancy of the Apartment that you book.<br>To make an enquiry, inspect or secure your booking, call our reservations team or enquire online today.</p>
                            </div>
                            </div>
                            <div class="row">
                            <div class="include head-para-apart-inner">
                            <h3>What’s included?</h3>
                            </div>
                            </div>
                            <div class="row">
                            <div class="list-include">
                            <ul>
                            <li>All furniture and homewares</li>
                            <li>Fully equipped kitchen</li>
                            <li>All utilities connection and usage charges (electricity, water &amp; gas)</li>
                            <li>Linen and towels</li>
                            <li>Unlimited Wi-Fi internet (extra charge)</li>
                            <li>LCD television</li>
                            <li>Ducted heating and cooling</li>
                            <li>Laundry</li>
                            </ul>
                            </div>
                            </div>
                            <div class="row">
                            <div class="good-know head-para-apart-inner">
                            <h3>Good to know</h3>
                            </div>
                            </div>
                            <div class="row">
                            <div class="good-know-list-include">
                            <ul>
                            <li>150 m to Parliament Train station</li>
                            <li>100 m to Macarthur St (becomes Collins Street) No 8 Tram Stop (Numbers 11, 12, 48, 109 Trams)</li>
                            <li>100 m to Fitzroy Gardens</li>
                            <li>550 m to Australian Catholic University</li>
                            <li>8 minutes to RMIT</li>
                            <li>8 minutes to Melbourne Central</li>
                            <li>11 minutes to Melbourne University</li>
                            <li>20 minutes to Monash Caulfield</li>
                            <li>50 m to Eye and Ear Hospital</li>
                            <li>550 m to Epworth Freemasons</li>
                            <li>600 m to St Vincent’s Hospital</li>
                            <li>8 minutes to State Library Victoria</li>
                            <li>900 m to Yarra River and Melbourne Sporting Precinct</li>
                            <li>Next door to The Old Treasury Building</li>
                            </ul>
                            </div>
                            </div>
                        @elseif(old('content') == null && isset($params) && isset($params['content-sub-type']) && $params['content-sub-type']=='how much')
                        <div class="row">
                            <div class="good-know head-para-apart-inner">
                            <h3>How Much</h3>
                            </div>
                            </div>
                            <div class="row">
                            <div class="duration-stay-wrap">
                            <div class="duration-stay-wrap-content">
                            <p class="duration-para">1. Duration of Stay Rates</p>
                            <table class="duration-table">
                            <tbody>
                            <tr>
                            <td>
                            <ul class="duration-first-col-list">
                            <li>12 Months</li>
                            <li>5 to 11 Months</li>
                            <li>1 to 5 Months</li>
                            <li>28 Days</li>
                            </ul>
                            </td>
                            <td>
                            <ul class="duration-second-col-list">
                            <li>$ 635 per week</li>
                            <li>$ 670 per week</li>
                            <li>$ 705 per week</li>
                            <li>$ 740 per week</li>
                            </ul>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            <p class="duration-para">2. Security Deposit / Bond: $2,500</p>
                            <p class="duration-para">3. Options</p>
                            <div class="option-list">
                            <ul>
                            <li>Unlimited Wi- Fi Internet is $23 per week extra</li>
                            <li>Additional guests (more than 2) – $60 for 1st additional person, $30 for 2nd additional person</li>
                            <li>Housekeeping service with linen change $140 + ($15 per extra bed over 2)</li>
                            <li>There is a once of exit clean fee of $250 (+ $50 for every additional bed over 2)</li>
                            <li>Car Park (subject to availability) $95 per week</li>
                            <li>Rent is paid every second Friday in advance</li>
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="note-wrap">
                            <div class="note-list">
                            <div class="note-head">
                            <p class="duration-para">Note</p>
                            </div>
                            <ul class="note-list">
                            <li>All prices are listed in Australian Dollars [AUD]</li>
                            <li>Prices include Goods &amp; Services Tax [GST]</li>
                            <li>Minimum stay is 1 month [28 Days]</li>
                            <li>Car Parking is subject to availability</li>
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="Bedding-wrap head-para-apart-inner">
                            <h3>Bedding options</h3>
                            </div>
                            </div>
                            <div class="row">
                            <div class="Bedding-wrap-content">
                            <div class="col-md-12">
                            <p class="beed-para">Bedding Configuration</p>
                            </div>
                            <ul class="main-options">
                            <li><span class="main-option-li">Bedroom 1</span>
                            <ul class="sub-options">
                            <li>1 x king bed</li>
                            <li>Or</li>
                            <li>2 x single beds</li>
                            <li>Or</li>
                            <li>1 x single bed + 1 x bunk bed</li>
                            <li>Or</li>
                            <li>2 x bunk beds</li>
                            <li>Maximum occupancy 4 people</li>
                            </ul>
                            </li>
                            </ul>
                            </div>
                            </div>
                        @endif
                    </textarea>

                @if ($errors && $errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit"
                        class="btn btn-primary float-right">
                    {{ __($action) }}
                </button>
            </div>
        </div>
    </div>
</form>