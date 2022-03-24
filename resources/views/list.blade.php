<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .button {
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .button1 {background-color: #4CAF50;} /* Green */
    .button2 {background-color: #008CBA;} /* Blue */
</style>
<body>
    <h1>Restaurants</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        @foreach ($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant->id }}</td>
            <td>{{ $restaurant->restaurant_name }}</td>
            <td><a href="{{ route('review-index',$restaurant->id) }}"><button class="button button1">Comment</button></a><td>

        </tr>
        @endforeach
    </table>
</body>
</html>

{{-- wire:click="{{ session(['restaurant_id'=>$restaurant['id']]) }}" --}}
{{-- <td><button class="button button2">Rate</button></td> --}}
