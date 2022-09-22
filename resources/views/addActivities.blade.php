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
        <label for="name">name *</label>
        <input type="text" name="name" id="name" maxlength="20" required>
        <br>
        <label for="location">location *</label>
        <input type="text" name="location" id="location" maxlength="20" required>
        <br>
        <label for="food">food *</label>
        <select name="food" id="food" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <br>
        <label for="image">image *</label>
        <input type="text" name="image" id="image" maxlength="50" required>
        <br>
        <label for="price">price *</label>
        <input type="number" name="price" id="price" min="1" max="10000" required>
        <br>
        <label for="startTime">Start time *</label>
        <input type="datetime-local" name="startTime" id="startTime" required>
        <br>
        <label for="endTime">End time *</label>
        <input type="datetime-local" name="endTime" id="endTime" required>
        <br>
        <label for="description">description *</label>
        <input type="text" name="description" id="description" maxlength="500" required>
        <br>
        <label for="needs">needs *</label>
        <input type="text" name="needs" id="needs" maxlength="200" required>
        <br>
        <label for="maxParticipants">max participants *</label>
        <input type="number" name="maxParticipants" id="maxParticipants" min="1" max="1000" required>
        <br>
        <label for="minParticipants">min participants *</label>
        <input type="number" name="minParticipants" id="minParticipants" min="1" max="1000" required> 
        <br>
        <button type="submit">Add</button>
    </form>

</body>
</html>