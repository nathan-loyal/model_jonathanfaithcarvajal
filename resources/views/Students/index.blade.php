<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Fulname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Zip</th>
                                <th>Birthdate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->fullname}}</td>
                                <td>{{$student->Email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->city}}</td>
                                <td>{{$student->province}}</td>
                                <td>{{$student->zip}}</td>
                                <td>{{$student->birthdate}}</td>
                                <td>
                                    <a href="{{ url('student' , $student->id) }}/edit" class="btn btn-outline-success btn-sm"></a>   
                                    <form action="{{ url('student' , $student->id) }}" method="post">   
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-success btn-sm" onclick="return confirm('are you sure you want to delete')">delete</button>
                                    </form>
                                </td>
                                    @endforeach   
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>                
        </div>
    </div>
</body>
</html>