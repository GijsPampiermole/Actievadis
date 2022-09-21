@extends('layout')
@section('content')
        <h2 class="title">Overview</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>food</th>
                <th>image</th>
                <th>price</th>
                <th>start-time</th>
                <th>end-time</th>
            </tr>
            <tr>
                <td>Keagan Mulder</td>
                <td>Amsterdam</td>
                <td>Pizza Pollo</td>
                <td><img class="pp" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"></td>
                <td>€22,50</td>
                <td>2:45pm</td>
                <td>3:15pm</td>
            </tr>
            <tr>
                <td>Gijs Pampiermole</td>
                <td>Arnhem</td>
                <td>Kaas</td>
                <td><img class="pp" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"></td>
                <td>€29,99</td>
                <td>6:00am</td>
                <td>7:00am</td>
            </tr>
            <tr>
                <td>Tijme Wolters</td>
                <td>Eindhoven</td>
                <td>Maaltijdsalade Geitenkaas</td>
                <td><img class="pp" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"></td>
                <td>€8,14</td>
                <td>2:30pm</td>
                <td>9:00pm</td>
            </tr>
            <tr>
                <td>Ben Berkenbosch</td>
                <td>London</td>
                <td>Lasagne Met Courgette</td>
                <td><img class="pp" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"></td>
                <td>€340,00</td>
                <td>1:00pm</td>
                <td>11:00am</td>
            </tr>
        </table>

@endsection

@vite(['resources/css/app.scss', 'resources/js/app.js'])
