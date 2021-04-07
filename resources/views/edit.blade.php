<html>
    <head>
        <link rel="stylesheet" href="/css/create-user.css">
    </head>

    <body>
        <form action="{{url('/update/'.$student->id)}}" class="create-user" method="post">
            @csrf
            <label>ID: </label> <input type="text" name="id" value="{{$student->student_id}}">
            <label>First name: </label><input type="text" name="name" value="{{$student->name}}">
            <label>Last name: </label><input type="text" name="lastname" value="{{$student->lastname}}">
            <label>Age: </label><input type="text" name="age" value="{{$student->age}}">
            <label>Class: </label>
            <select name="class" name="class" value="{{$student->class}}">
                <option value="2A" {{$student->class == '2A' ? 'selected' : ""}}>2A</option>
                <option value="2B" {{$student->class == '2B' ? 'selected' : ""}}>2B</option>
                <option value="2C" {{$student->class == '2C' ? 'selected' : ""}}>2C</option>
                <option value="2D" {{$student->class == '2D' ? 'selected' : ""}}>2D</option>
            </select>
            <button>Edit</button>
        </form>
    </body>
</html>