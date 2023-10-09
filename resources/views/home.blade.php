@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (count($submissions) > 0)
                        <h2>Form Submissions:</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Subsidiary</th>
                                    <th>Cluster</th>
                                    <th>Name of Supervisor</th>
                                    <th>Attention Pledge</th>
                                    <th>Passport Photo</th>
                                    <th>Signature</th>
                                    <th>Submitted:</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($submissions as $submission)
                                    <tr>
                                        <td>{{ $submission->name }}</td>
                                        <td>{{ $submission->subsidiary }}</td>
                                        <td>{{ $submission->cluster }}</td>
                                        <td>{{ $submission->supervisor_name }}</td>
                                        <td>{{ $submission->attention_pledge }}</td>
                                        <td>{{ $submission->passport_photo }}</td>
                                        <td>{{ $submission->signature }}</td>
                                        <td>{{ $submission->created_at }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No form submissions found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
