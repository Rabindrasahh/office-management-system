@extends('admin-panel.main')

@section('content')

 <div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Employee Task</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
        	 @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->Pro_name}}</td>
                <td>{{$user->Employee_task}}</td>
                <td>{{$user->start_time}}</td>
                <td>{{$user->end_time}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection