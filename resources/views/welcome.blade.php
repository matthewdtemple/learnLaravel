<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
     
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                <h1>To-Do List</h1> <br>


                <form method="post" action="{{ route('saveItem') }}" >
                    {{ csrf_field() }}

                    <lable for="listItem">New Item</lable> </br>
                    <input type="text" name="listItem" placeholder="Enter new item" /> </br>
                    <button type="submit">Add</button> 

                    <br>
                    <br>
                    <ul>
                    @foreach($listItems as $listItem)
                        <li>{{ $listItem->name }} 
                            <form method="post" action="{{ route('markComplete', $listItem->id) }}">
                            {{ csrf_field() }}
                            <button type="submit">Mark complete</button> 
                            </form>
                        </li>
                        <br>
                    @endforeach
                </div>
    </body>
</html>
