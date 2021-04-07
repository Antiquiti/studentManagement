<html>
    <head>
        <link rel="stylesheet" href="/css/create-user.css">
    </head>

    <body>
        <form action="{{url('/store')}}" class="create-user" method="post">
            @csrf
            <label>ID: </label> <input type="text" name="id">
            <label>First name: </label><input type="text" name="name">
            <label>Last name: </label><input type="text" name="lastname">
            <label>Age: </label><input type="text" name="age">
            <label>Class: </label>
            <select name="class">
                <option value="2A">2A</option>
                <option value="2B">2B</option>
                <option value="2C">2C</option>
                <option value="2D">2D</option>
            </select>
            <button>Add</button>
        </form>
    </body>
</html>