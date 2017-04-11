@forelse($users as $user)
    <tr>
        <td> {{ $user->id }} </td>
        <td> {{ $user->name }} </td>
        <td> {{ $user->email }} </td>
        <td> {{ strtoupper($user->gender) }} </td>
        <td> {{ $user->biography }} </td>
        <td>
            {!! Form::open(['route' => ['delete', $user->id], 'method' => 'delete']) !!}
                <button type="submit" title="Eliminar">
                    <i class="glyphicon glyphicon-trash"></i>
                </button>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach