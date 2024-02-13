@foreach($doctors as $doctor)
    <li>
        <strong>Name:</strong> {{ $doctor->name }}<br>
        <strong>Email:</strong> {{ $doctor->email }}<br>
    </li>
@endforeach

