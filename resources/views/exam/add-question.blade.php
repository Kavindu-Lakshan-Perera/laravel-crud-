<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Question</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


</head>
<body>

    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h4> Add Question  </h4>
                <br>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

                <form method="POST" action="{{url('save-question')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-lable">Question : </label>
                        <input type="text" class="form-control" name="question" value="{{old('question')}}">
                        @error('question')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lable">Option A : </label>
                        <input type="text" class="form-control" name="opA" value="{{old('opA')}}" >
                        @error('option A')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lable">Option B : </label>
                        <input type="text" class="form-control" name="opB" value="{{old('opB')}}">
                        @error('option B')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lable">Option C : </label>
                        <input type="text" class="form-control" name="opC" value="{{old('opC')}}">
                        @error('option C')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lable">Option D : </label>
                        <input type="text" class="form-control" name="opD" value="{{old('opD')}}">
                        @error('option D')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lable">Answer : </label>
                        <input type="text" class="form-control" name="answer" value="{{old('answer')}}">
                        @error('answer')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary"> Submit </button>

                    <a href="{{url('question-list')}}" class="btn btn-danger"> Back</a>
            </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-SJBOal1C6UWm6Ua+6QIBLZ9YLRZ7W8JLb0MZixV0w+HvlzgsW8c0MxAL7VZrgYtf" crossorigin="anonymous"></script>


</body>
</html>
