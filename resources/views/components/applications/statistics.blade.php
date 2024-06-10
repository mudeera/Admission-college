@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<section class="content">
      	<div class="container-fluid py-5">
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table">  
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>No. of applicants</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ICS</td>
                                <td>
                                    @php
                                        $noOfApplicationForIcs = 0;
                                    @endphp
                                    @foreach ($applications as $key => $application)
                                        @if(strtolower($application->course->name) == "ics")
                                            @php
                                                $noOfApplicationForIcs =  $noOfApplicationForIcs + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{  $noOfApplicationForIcs }}
                                </td>
                            </tr>
                            <tr>
                                <td>Pre Medical</td>
                                <td>
                                    @php
                                        $noOfApplicationForPreMedical = 0;
                                    @endphp
                                    @foreach ($applications as $key => $application)
                                        @if(strtolower($application->course->name) == "pre-medical")
                                            @php
                                                $noOfApplicationForPreMedical =  $noOfApplicationForPreMedical + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{  $noOfApplicationForPreMedical }}
                                </td>
                            </tr>
                            <tr>
                                <td>Pre Engineering</td>
                                <td>
                                    @php
                                        $noOfApplicationForPreEngineering = 0;
                                    @endphp
                                    @foreach ($applications as $key => $application)
                                        @if(strtolower($application->course->name) == "pre-engineering")
                                            @php
                                                $noOfApplicationForPreEngineering =  $noOfApplicationForPreEngineering + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{  $noOfApplicationForPreEngineering }}
                                </td>
                            </tr>
                            <tr>
                                <td>BSCS</td>
                                <td>
                                    @php
                                        $noOfApplicationForBscs = 0;
                                    @endphp
                                    @foreach ($applications as $key => $application)
                                        @if(strtolower($application->course->name) == "bscs")
                                            @php
                                                $noOfApplicationForBscs =  $noOfApplicationForBscs + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{  $noOfApplicationForBscs }}
                                </td>
                            </tr>
                            <tr>
                                <td>BS Botany</td>
                                <td>
                                    @php
                                        $noOfApplicationForBsbotany = 0;
                                    @endphp
                                    @foreach ($applications as $key => $application)
                                        @if(strtolower($application->course->name) == "bs-botany")
                                            @php
                                                $noOfApplicationForBsbotany =  $noOfApplicationForBsbotany + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{  $noOfApplicationForBsbotany }}
                                </td>
                            </tr>
                            <tr>
                                <td>ADP</td>
                                <td>
                                    @php
                                        $noOfApplicationForadp = 0;
                                    @endphp
                                    @foreach ($applications as $key => $application)
                                        @if(strtolower($application->course->name) == "adp")
                                            @php
                                                $noOfApplicationForadp =  $noOfApplicationForadp + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{  $noOfApplicationForadp }}
                                </td>
                            </tr>
                            <tr>
                                <td>Humanities</td>
                                <td>
                                    @php
                                        $noOfApplicationForHumanities = 0;
                                    @endphp
                                    @foreach ($applications as $key => $application)
                                        @if(strtolower($application->course->name) == "humanities")
                                            @php
                                                $noOfApplicationForHumanities =  $noOfApplicationForHumanities + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    {{  $noOfApplicationForHumanities }}
                                </td>
                            </tr>
                        </tbody>   
                  </table>
                  <div class="btn__wrap">
                        <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
<script>
    function deleteUserModal(id){
        $(".deleteform").attr('action','/application/'+id);
        $(".modal").show();
    }

</script>

<style>
	.sidebar-mini .row a {
		text-decoration: none;
	}
    .content-wrapper .btn__wrap {
		margin-top: 20px;
		display: flex;
		justify-content: flex-end;
	}
</style>