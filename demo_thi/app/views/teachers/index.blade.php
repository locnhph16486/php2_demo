<a href="{{BASE_URL.'teachers/tao'}}">ADD</a>
<table>
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>School</th>
        <th>avatar</th>
        <th>Salary</th>
        <th>Birth</th>
        <th>Action</th>
    </tr>
    @foreach ($teacher as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>
        @if ($item->gender == 1)
        {{"Nam"}}
        @else
        {{"Nu"}}
        @endif
        </td>
        <td>@foreach ($school as $s)
            @if ($s->id==$item->school_id)
                {{$s->name}}
            @endif
        @endforeach
        </td>
        <td>{{$item->avatar}}</td>
        <td>{{$item->salary}}</td>
        <td>{{$item->birth_date}}</td>
        <td>
            <a href="{{BASE_URL.'teachers/sua/'.$item->id}}">Update</a>|
            <a href="{{BASE_URL.'teachers/xoa/'.$item->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>