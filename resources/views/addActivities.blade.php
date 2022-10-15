@extends('layout')
@section('content')
    <h3 style="margin-top: 50px;">Add Activity</h3>
    <form action="/addActivity" method="POST">
        @csrf
        <div class="col-lg-4">
            <label for="name">Name <span style="color: red;">*</span></label><br>
            <input type="text" name="name" id="name" maxlength="20" class="form-control" required>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="description">Description <span style="color: red;">*</span></label><br>
            <textarea name="description" id="description" rows="6" maxlength="500" class="form-control"
                      required></textarea>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="image">Image <span style="color: red;">*</span></label><br>
            <input type="text" name="image" id="image" maxlength="50" class="form-control" required>
            <br>
        </div>
        <div class="col-lg-2">
            <label for="price">Price <span style="color: red;">*</span></label><br>
            <input type="number" name="price" id="price" min="1" max="10000" class="form-control" required>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="needs">Needs <span style="color: red;">*</span></label><br>
            <input type="text" name="needs" id="needs" maxlength="200" class="form-control" required>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="location">Location <span style="color: red;">*</span></label><br>
            <input type="text" name="location" id="location" maxlength="20" class="form-control" required>
            <br>
        </div>
        <div class="col-lg-2">
            <label for="food">Food <span style="color: red;">*</span></label><br>
            <select name="food" id="food" class="form-select" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="startTime">Start time <span style="color: red;">*</span></label><br>
            <input type="datetime-local" name="startTime" id="startTime" class="form-control" required>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="endTime">End time <span style="color: red;">*</span></label><br>
            <input type="datetime-local" name="endTime" id="endTime" class="form-control" required>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="minParticipants">Minimum participants <span style="color: red;">*</span></label><br>
            <input type="number" name="minParticipants" id="minParticipants" min="1" max="1000" class="form-control"
                   required>
            <br>
        </div>
        <div class="col-lg-4">
            <label for="maxParticipants">Maximum participants <span style="color: red;">*</span></label><br>
            <input type="number" name="maxParticipants" id="maxParticipants" min="1" max="1000" class="form-control"
                   required>
            <br>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Add</button>
    </form>
@endsection
