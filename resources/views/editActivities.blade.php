@extends('layout')
@section('content')

    <h3 style="margin-top: 50px;">Edit Activity</h3>
    <form action="/editActivity/{activity->id}/update" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$activity->id}}">
        <div class="col-lg-4">
        <label for="name">Name <span style="color: red;">*</span></label><br>
        <input type="text" name="name" id="name" maxlength="20" class="form-control" value="{{$activity->name}}" required>
        <br>
        </div>
        <div class="col-lg-4">
        <label for="description">Description <span style="color: red;">*</span></label><br>
        <textarea name="description" id="description" rows="6" maxlength="500" class="form-control" required>{{$activity->description}}</textarea>
        <br>
        </div>
        <div class="col-lg-4">
        <label for="image">Image <span style="color: red;">*</span></label><br>
        <input type="text" name="image" id="image" maxlength="50" class="form-control" value="{{$activity->image}}" required>
        <br>
        </div>
        <div class="col-lg-2">
        <label for="price">Price <span style="color: red;">*</span></label><br>
        <input type="number" name="price" id="price" min="1" max="10000" class="form-control" value="{{$activity->price}}" required>
        <br>
        </div>
        <div class="col-lg-4">
        <label for="needs">Needs <span style="color: red;">*</span></label><br>
        <input type="text" name="needs" id="needs" maxlength="200" class="form-control" value="{{$activity->needs}}" required>
        <br>
        </div>
        <div class="col-lg-4">
        <label for="location">Location <span style="color: red;">*</span></label><br>
        <input type="text" name="location" id="location" maxlength="20" class="form-control" value="{{$activity->location}}" required>
        <br>
        </div>
        <div class="col-lg-2">
        <label for="food">Food <span style="color: red;">*</span></label><br>
        <select name="food" id="food" class="form-control" required>
            <option value="1" @if($activity->food == 1) selected @endif>Yes</option>
            <option value="0" @if($activity->food == 0) selected @endif>No</option>
        </select>
        <br>
        </div>
        <div class="col-lg-2">
        <label for="minParticipants">Min. Participants <span style="color: red;">*</span></label><br>
        <input type="number" name="minParticipants" id="minParticipants" min="1" max="10000" class="form-control" value="{{$activity->minParticipants}}" required>
        <br>
        </div>
        <div class="col-lg-2">
        <label for="maxParticipants">Max. Participants <span style="color: red;">*</span></label><br>
        <input type="number" name="maxParticipants" id="maxParticipants" min="1" max="10000" class="form-control" value="{{$activity->maxParticipants}}" required>
        <br>
        </div>
        <div class="col-lg-2">
        <label for="startTime">Start Time <span style="color: red;">*</span></label><br>
        <input type="time" name="startTime" id="startTime" class="form-control" value="{{$activity->startTime}}" required>
        <br>
        </div>
        <div class="col-lg-2">
        <label for="endTime">End Time <span style="color: red;">*</span></label><br>
        <input type="time" name="endTime" id="endTime" class="form-control" value="{{$activity->endTime}}" required>
        <br>
        </div>
    </form>
    <div class="col-lg-2">
        <button type="submit" class="btn btn-primary">Bewerken</button>
    </div>
@endsection

       