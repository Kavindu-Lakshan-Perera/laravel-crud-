<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2> Subject List <h2>
            </div>
                    <div style="float: right;">
                        <a href="{{url('add-subject')}}" class="btn btn-primary"> Add Subject</a>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead><tr>
                            <th>#</th>
                            <th>Subject_ID</th>
                            <th>Subject_Name</th>
                            <th>Grade</th>
                            <th>Action</th>

                         </tr></thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $sub)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td><p> {{$sub->subject_ID}} </p> </td>
                                    <td> {{$sub->subject_name}} </td>
                                    <td> {{$sub->grade}} </td>

                                    <td> <a href="{{url('edit-subject/'.$sub->subject_ID)}}" class="btn btn-primary"> Edit</a> | <a href="{{url('delete-subject/'.$sub->subject_ID)}}" class="btn btn-danger"> Delete</a> </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

        </div>
    </div><!-- div ek genichcha 13 row ekta -->
</body>
</html>
