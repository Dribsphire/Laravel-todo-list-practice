<!DOCTYPE html>
<html>

<head>
    <title>To Do List</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #11121a;
            padding: 20px;
            color: #1ad21c;
        }

        .container {
            background-color: #222533;
            border: 1px solid #cccccc;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            border-radius: 10px !important;
        }

        h2 {
            margin-top: 0;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 5px;
            width: 250px;
        }

        button {
            padding: 5px 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            border-bottom: 1px solid #eeeeee;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>My To Do List</h2>

        <form action="/add" method="POST">
            @csrf
            <input type="text" name="title" required>
            <button type="submit">Add</button>
        </form>

        <ul>
            @foreach($tasks as $task)
                <li>
                    <span>{{ $task->title }}</span>
                    <button class="delete-btn"
                        onclick="if(confirm('Are you sure you want to delete this task?')) window.location.href='/delete/{{ $task->id }}'">Delete</button>
                </li>
            @endforeach
        </ul>
    </div>

</body>

</html>