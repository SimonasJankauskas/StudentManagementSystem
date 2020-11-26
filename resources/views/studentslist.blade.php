<div class="card mb-3">
    <img src="https://allea.org/wp-content/uploads/2019/06/shutterstock_520698799small-1500x430.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">List of students</h5>
      <p class="card-text">You can find here all information about students</p>

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            @if (auth()->check())
            <th scope="col">Operations</th>
            @endif
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)            
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    @if (auth()->check()) 
                    <td>                       
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/delete/'. $student->id) }}" class="btn btn-sm btn-danger">Delete</a>                     
                    </td>
                    @endif   
                </tr>
            @endforeach
        </tbody>
      </table>
      
    </div>
  </div>
   
   
   