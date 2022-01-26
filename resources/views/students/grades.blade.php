@extends('students.index')

@section('content')


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Grades
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
                @foreach ($grades as $grades)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $grades['subjects'] }}</h3>
                            <h5>Midterm Grade: {{ $grades['midterm'] }}</h5>
                            <h5>Final Term Grade: {{ $grades['final_term'] }}</h5>
                            <h5>Overall Subject Grade: {{ $grades['overall_subject_grade'] }}</h5>
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