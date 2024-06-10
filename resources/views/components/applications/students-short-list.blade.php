@extends('layouts.app')
@section('content')
@php
    $noOfApplicationsForPreMedicalMeritList1 = 0;
    $noOfApplicationsForPreMedicalMeritList2 = 0;
    $noOfApplicationsForPreEngineeringMeritList1 = 0;
    $noOfApplicationsForPreEngineeringMeritList2 = 0;
    $noOfApplicationsForICSMeritList1 = 0;
    $noOfApplicationsForICSMeritList2 = 0;
    $noOfApplicationsForBSMeritList1 = 0;
    $noOfApplicationsForBSMeritList2 = 0;
    $noOfApplicationsForPsycologyMeritList1 = 0;
    $noOfApplicationsForPsycologyMeritList2 = 0;

    foreach ($applications as $application) {
        if ($application->course->name == "Pre-Medical") {
            if ($application->obtained_percentage >= 60) {
                $noOfApplicationsForPreMedicalMeritList1++;
            } elseif ($application->obtained_percentage >= 40) {
                $noOfApplicationsForPreMedicalMeritList2++;
            }
        } elseif ($application->course->name == "Pre-Engineering") {
            if ($application->obtained_percentage >= 60) {
                $noOfApplicationsForPreEngineeringMeritList1++;
            } elseif ($application->obtained_percentage >= 40) {
                $noOfApplicationsForPreEngineeringMeritList2++;
            }
        } elseif ($application->course->name == "ICS") {
            if ($application->obtained_percentage >= 60) {
                $noOfApplicationsForICSMeritList1++;
            } elseif ($application->obtained_percentage >= 40) {
                $noOfApplicationsForICSMeritList2++;
            }
        } elseif ($application->course->name == "BS") {
            if ($application->obtained_percentage >= 60) {
                $noOfApplicationsForBSMeritList1++;
            } elseif ($application->obtained_percentage >= 40) {
                $noOfApplicationsForBSMeritList2++;
            }
        } elseif ($application->course->name == "Psycology") {
            if ($application->obtained_percentage >= 60) {
                $noOfApplicationsForPsycologyMeritList1++;
            } elseif ($application->obtained_percentage >= 40) {
                $noOfApplicationsForPsycologyMeritList2++;
            }
        }
    }
@endphp

<div class="content-wrapper">
    <section class="content">
        @if($noOfApplicationsForPreMedicalMeritList1 > 0 || $noOfApplicationsForPreMedicalMeritList2 > 0)
            <div class="main">
                <h1 class="text-center font-weight-bold p-4">Merit Lists For Pre Medical Students</h1>
                <div class="container-fluid py-5">
                    @if($noOfApplicationsForPreMedicalMeritList1 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">First Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 60 && $application->course->name == "Pre-Medical")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($noOfApplicationsForPreMedicalMeritList2 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">Second Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 40 && $application->obtained_percentage < 60 && $application->course->name == "Pre-Medical")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="btn__wrap d-flex justify-content-end py-2">
                                    <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        @if($noOfApplicationsForPreEngineeringMeritList1 > 0 || $noOfApplicationsForPreEngineeringMeritList2 > 0)
            <div class="main">
                <h1 class="text-center font-weight-bold p-4">Merit Lists For Pre Engineering Students</h1>
                <div class="container-fluid py-5">
                    @if($noOfApplicationsForPreEngineeringMeritList1 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">First Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 60 && $application->course->name == "Pre-Engineering")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($noOfApplicationsForPreEngineeringMeritList2 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">Second Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 40 && $application->obtained_percentage < 60 && $application->course->name == "Pre-Engineering")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="btn__wrap d-flex justify-content-end py-2">
                                    <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        @if($noOfApplicationsForICSMeritList1 > 0 || $noOfApplicationsForICSMeritList2 > 0)
            <div class="main">
                <h1 class="text-center font-weight-bold p-4">Merit Lists For ICS Students</h1>
                <div class="container-fluid py-5">
                    @if($noOfApplicationsForICSMeritList1 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">First Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 60 && $application->course->name == "ICS")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($noOfApplicationsForICSMeritList2 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">Second Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 40 && $application->obtained_percentage < 60 && $application->course->name == "ICS")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="btn__wrap d-flex justify-content-end py-2">
                                    <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        @if($noOfApplicationsForBSMeritList1 > 0 || $noOfApplicationsForBSMeritList2 > 0)
            <div class="main">
                <h1 class="text-center font-weight-bold p-4">Merit Lists For BS Students</h1>
                <div class="container-fluid py-5">
                    @if($noOfApplicationsForBSMeritList1 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">First Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 60 && $application->course->name == "BS")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($noOfApplicationsForBSMeritList2 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">Second Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 40 && $application->obtained_percentage < 60 && $application->course->name == "BS")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="btn__wrap d-flex justify-content-end py-2">
                                    <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        @if($noOfApplicationsForPsycologyMeritList1 > 0 || $noOfApplicationsForPsycologyMeritList2 > 0)
            <div class="main">
                <h1 class="text-center font-weight-bold p-4">Merit Lists For Psycology Students</h1>
                <div class="container-fluid py-5">
                    @if($noOfApplicationsForPsycologyMeritList1 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">First Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 60 && $application->course->name == "Psycology")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($noOfApplicationsForPsycologyMeritList2 > 0)
                        <div class="card">
                            <h2 class="text-center font-weight-bold p-4">Second Merit List</h2>
                            <div class="card-body">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            @if($application->obtained_percentage >= 40 && $application->obtained_percentage < 60 && $application->course->name == "Psycology")
                                                <tr>
                                                    <td>{{ $application->name }}</td>
                                                    <td>{{ $application->fname }}</td>
                                                    <td>{{ $application->course->name }}</td>
                                                    <td>selected</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="btn__wrap d-flex justify-content-end py-2">
                                    <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </section>
</div>
@endsection
