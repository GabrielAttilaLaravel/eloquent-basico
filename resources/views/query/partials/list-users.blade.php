@forelse($users as $user)
    <tr>
        <td> {{ $user->id }} </td>
        <td> {{ $user->name }} </td>
        <td> {{ $user->email }} </td>
        <td> {{ strtoupper($user->gender) }} </td>
        <td> {{ $user->biography }} </td>
    </tr>
@endforeach