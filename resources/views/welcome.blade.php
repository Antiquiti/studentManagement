<html>

    <head>
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/app.js"></script>
    </head>

    <body>
        <h1>Student Management System</h1>

        <div class="table-container">
            <table id="table2A">
                <thead>
                    <tr>
                        <th colspan="6" class="classtd">Class 2A</th>
                    </tr>

                    <tr>
                        <th id="searchColumn" colspan="6"><input type="text" id="search2A" class="search"></th>
                    </tr>

                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class="small-column">Age</th>
                        <th class="small-column">Edit</th>
                        <th class="small-column">Delete</th>
                        <th class="mini-column">
                            <form action="/create" method="get">
                                <button>+</button>
                            </form>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($students as $student)
                        @if($student->class =='2A')
                        <tr>
                            <td>{{$student->student_id}}</td>
                            <td id="name">{{$student->name}}</td>
                            <td id="lastname">{{$student->lastname}}</td>
                            <td>{{$student->age}}</td>
                            <td>
                                <form action="{{url('/edit/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="edit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{url('/delete/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach  
                </tbody>
            </table>
        </div>

        <div class="table-container">
            <table id="table2B">
                <thead>
                    <tr>
                        <th colspan="6" class="classtd">Class 2B</th>
                    </tr>

                    <tr>
                        <th id="searchColumn" colspan="6"><input type="text" class="search" id="search2B"></th>
                    </tr>

                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class="small-column">Age</th>
                        <th class="small-column">Edit</th>
                        <th class="small-column">Delete</th>
                        <th class="mini-column">
                            <form action="/create" method="get">
                                <button>+</button>
                            </form>
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($students as $student)
                        @if($student->class =='2B')
                        <tr>
                            <td>{{$student->student_id}}</td>
                            <td id="name">{{$student->name}}</td>
                            <td id="lastname">{{$student->lastname}}</td>
                            <td>{{$student->age}}</td>
                            <td>
                                <form action="{{url('/edit/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="edit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{url('/delete/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach  
                </tbody>
            </table>
        </div>

        <div class="table-container">
            <table id="table2C">
                <thead>
                    <tr>
                        <th colspan="6" class="classtd">Class 2C</th>
                    </tr>

                    <tr>
                        <th id="searchColumn" colspan="6"><input type="text" class="search" id="search2C"></th>
                    </tr>

                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class="small-column">Age</th>
                        <th class="small-column">Edit</th>
                        <th class="small-column">Delete</th>
                        <th class="mini-column">
                            <form action="/create" method="get">
                                <button>+</button>
                            </form>
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($students as $student)
                        @if($student->class =='2C')
                        <tr>
                            <td>{{$student->student_id}}</td>
                            <td id="name">{{$student->name}}</td>
                            <td id="lastname">{{$student->lastname}}</td>
                            <td>{{$student->age}}</td>
                            <td>
                                <form action="{{url('/edit/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="edit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{url('/delete/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach  
                </tbody>
            </table>
        </div>

        <div class="table-container">
            <table id="table2D">
                <thead>
                    <tr>
                        <th colspan="6" class="classtd">Class 2D</th>
                    </tr>

                    <tr>
                        <th id="searchColumn" colspan="6"><input type="text" class="search" id="search2D"></th>
                    </tr>
                    
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class="small-column">Age</th>
                        <th class="small-column">Edit</th>
                        <th class="small-column">Delete</th>
                        <th class="mini-column">
                            <form action="/create" method="get">
                                <button>+</button>
                            </form>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($students as $student)
                        @if($student->class =='2D')
                        <tr>
                            <td>{{$student->student_id}}</td>
                            <td id="name">{{$student->name}}</td>
                            <td id="lastname">{{$student->lastname}}</td>
                            <td>{{$student->age}}</td>
                            <td>
                                <form action="{{url('/edit/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="edit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{url('/delete/'.$student->id)}}" method="post">
                                    @csrf
                                    <button class="delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach  
                </tbody>
            </table>
        </div>
    </body>

</html>
