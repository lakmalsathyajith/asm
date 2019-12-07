@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Booking Details') }}</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Apartment
                                    </span>
                                    <span class="text-muted">{{ $record->apartment->name }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Status
                                    </span>
                                    <span class="text-muted">{{ $record->formattedStatus }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Adults
                                    </span>
                                    <span class="text-muted">{{ $record->adults }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Children
                                    </span>
                                    <span class="text-muted">{{ $record->children }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Check In Date
                                    </span>
                                    <span class="text-muted">{{ $record->formattedCheckIn }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Check Out Date
                                    </span>
                                    <span class="text-muted">{{ $record->formattedCheckOut }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Rent
                                    </span>
                                    <span class="text-muted">{{ $record->rent }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        RMS Reference
                                    </span>
                                    <span class="text-muted">{{ $record->rms_reference }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Agent Code
                                    </span>
                                    <span class="text-muted">{{ $record->agent }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <p class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        Record Created at
                                    </span>
                                    <span class="text-muted">{{ $record->created_at }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(!$occupantSelected)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Occupant List') }}</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if(!isset($record->occupants) || count($record->occupants) < 1)
                                    @include('admin.common.alerts.infoNoRecords')
                                @else
                                    <table class="table table-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Is Primary</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($record->occupants as $occupant)
                                            <tr id="type_{{ $occupant->id }}">
                                                <th scope="row">{{ $occupant->id }}</th>
                                                <td>{{ $occupant->first_name }}</td>
                                                <td>{{ $occupant->last_name }}</td>
                                                <td>{{ $occupant->formattedType }}</td>
                                                <td>{{ $occupant->is_primary ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="{{ route('booking.show', ['booking' => $record->id, 'occupant' => $occupant->id]) }}">
                                                        <div class="btn btn-xs">
                                                            <i class="fas fa-eye"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            {{ __('Occupant - ' . $occupant->first_name .' '. $occupant->last_name) }}
                        </h3>
                        <div class="card-tools">
                            <div class="btn btn-tool">
                                <a href="{{ route('booking.show', ['booking' => $record->id]) }}"><i
                                            class="fas fa-list"></i> List</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-3">Basic details</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center border-bottom mb-3">
                                    <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            First Name
                                        </span>
                                        <span class="text-muted">{{ $occupant->first_name }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center border-bottom mb-3">
                                    <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Last Name
                                        </span>
                                        <span class="text-muted">{{ $occupant->last_name }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center border-bottom mb-3">
                                    <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Type
                                        </span>
                                        <span class="text-muted">{{ $occupant->formattedType }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        @if ($occupant->identity)
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h6 class="mb-3">Occupant Identity</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        @if(isset($occupant->identity)
                                        && isset($occupant->identity->files)
                                        && isset($occupant->identity->files->first()->url)
                                        && strpos($occupant->identity->files->first()->url, 'jpeg') !== false
                                        && strpos($occupant->identity->files->first()->url, 'jpg') !== false
                                        && strpos($occupant->identity->files->first()->url, 'png') !== false)
<img src="{{isset($occupant->identity)
    && isset($occupant->identity->files)
    && isset($occupant->identity->files->first()->url)
    ?  $occupant->identity->files->first()->url : "https://sciences.ucf.edu/psychology/wp-content/uploads/sites/63/2019/09/No-Image-Available.png"}}"
alt="..."
class="img-thumbnail">
                                        @else
                                        <a href="{{isset($occupant->identity)
                                            && isset($occupant->identity->files)
                                            && isset($occupant->identity->files->first()->url)
                                            ?  $occupant->identity->files->first()->url : "https://sciences.ucf.edu/psychology/wp-content/uploads/sites/63/2019/09/No-Image-Available.png"}}" target="_blank">
                                        {{$occupant->identity->files->first()->name}}    
                                        </a>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center border-bottom mb-3">
                                                <p class="d-flex flex-column">
                                                <span class="font-weight-bold">
                                                    Identity Type
                                                </span>
                                                    <span class="text-muted">
                                                    {{ $occupant->identity && $occupant->identity->identity_type ? $occupant->identity->identity_type : 'NA'}}
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center border-bottom mb-3">
                                                <p class="d-flex flex-column">
                                                <span class="font-weight-bold">
                                                    Identity Number
                                                </span>
                                                    <span class="text-muted">
                                                    {{ $occupant->identity && $occupant->identity->identity_number ? $occupant->identity->identity_number : 'NA'}}
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center border-bottom mb-3">
                                                <p class="d-flex flex-column">
                                                <span class="font-weight-bold">
                                                    Issued By
                                                </span>
                                                    <span class="text-muted">
                                                    {{ $occupant->identity && $occupant->identity->identity_issued_by ? $occupant->identity->identity_issued_by : 'NA'}}
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($occupant->identity)
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h6 class="mb-3">Next of Kin</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Name
                                        </span>
                                            <span class="text-muted">
                                            {{ $occupant->identity && $occupant->identity->next_of_kin ? $occupant->identity->next_of_kin : 'NA'}}
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Relationship
                                        </span>
                                            <span class="text-muted">
                                            {{ $occupant->identity && $occupant->identity->kin_relationship ? $occupant->identity->kin_relationship : 'NA'}}
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Email
                                        </span>
                                            <span class="text-muted">
                                            {{ $occupant->identity && $occupant->identity->kin_email ? $occupant->identity->kin_email : 'NA'}}
                                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Address
                                        </span>
                                            <span class="text-muted">
                                            {{ $occupant->identity && $occupant->identity->kin_address ? $occupant->identity->kin_address : 'NA'}}
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Land Phone
                                        </span>
                                            <span class="text-muted">
                                            {{ $occupant->identity && $occupant->identity->kin_land_phone ? $occupant->identity->kin_land_phone : 'NA'}}
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                        <span class="font-weight-bold">
                                            Mobile Phone
                                        </span>
                                            <span class="text-muted">
                                            {{ $occupant->identity && $occupant->identity->kin_mobile_phone ? $occupant->identity->kin_mobile_phone : 'NA'}}
                                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($occupant->contacts)
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h6 class="mb-3">Contact details</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Email
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->email ? $occupant->contacts->email : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Address
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->address ? $occupant->contacts->address : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Mobile Phone
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->mobile_phone ? $occupant->contacts->mobile_phone : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Land Phone
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->land_phone ? $occupant->contacts->land_phone : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($occupant->contacts)
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h6 class="mb-3">Employment details</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Employment Status
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->emp_status ? $occupant->contacts->emp_status : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Department
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->emp_department ? $occupant->contacts->emp_department : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Personal Address
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->emp_personal_address ? $occupant->contacts->emp_personal_address : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Address
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->address ? $occupant->contacts->address : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column">
                                            <span class="font-weight-bold">
                                                Phone
                                            </span>
                                            <span class="text-muted">
                                                {{ $occupant->contacts && $occupant->contacts->emp_phone ? $occupant->contacts->emp_phone : 'NA'}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
