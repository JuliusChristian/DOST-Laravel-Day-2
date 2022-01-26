@extends('students.index')

@section('content')


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Student's Profile
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
                @foreach ($profile as $profile)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $profile['student_name'] }}</h3>
                            <h5>Picture: {{ $profile['student_avatar'] }}</h5>
                            <h5>Student ID: {{ $profile['student_id'] }}</h5>
                            <h5>Course: {{ $profile['course'] }}</h5>
                            <h5>Birthdate: {{ $profile['birthdate'] }}</h5>
                            <h5>Address: {{ $profile['address'] }}</h5>
                            <h5>Contacts: {{ $profile['contact_information'] }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
      </div>
    </div>
  </div>
</div>

@endsection