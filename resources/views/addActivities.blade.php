<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add activity</title>
</head>
<body>
    <h1>Add</h1>
    <form action="/addActivity" method="POST">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="location">location</label>
        <input type="text" name="location" id="location">
        <br>
        <label for="food">food</label>
        <input type="text" name="food" id="food">
        <br>
        <label for="image">image</label>
        <input type="text" name="image" id="image">
        <br>
        <label for="price">price</label>
        <input type="number" name="price" id="price">
        <br>
        <label for="startTime">Start time</label>
        <input type="datetime-local" name="startTime" id="startTime">
        <br>
        <label for="endTime">End time</label>
        <input type="datetime-local" name="endTime" id="endTime">
        <br>
        <label for="description">description</label>
        <input type="text" name="description" id="description">
        <br>
        <label for="needs">needs</label>
        <input type="text" name="needs" id="needs">
        <br>
        <label for="maxParticipants">max participants</label>
        <input type="number" name="maxParticipants" id="maxParticipants">
        <br>
        <label for="minParticipants">min participants</label>
        <input type="number" name="minParticipants" id="minParticipants">
        <br>
        <button type="submit">Add</button>
    </form>

</body>
</html>