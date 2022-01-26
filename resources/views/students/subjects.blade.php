@extends('students.index')

@section('content')


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Subjects
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
                @foreach ($subjects as $subjects)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $subjects['subject_name'] }}</h3>
                            <h5>Schedule: {{ $subjects['daily_schedule'] }}</h5>
                            <h5>Time: {{ $subjects['time'] }}</h5>
                            <h5>Room: {{ $subjects['room'] }}</h5>
                            <h5>Instructor: {{ $subjects['instructor'] }}</h5>
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