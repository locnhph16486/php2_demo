{{-- {{$today = date("d/m/Y")}}
{{	var_dump($today)}}
{{	die}} --}}
<a href="{{BASE_URL.'schools/tao'}}">ADD</a>
<table>
    <thead>
        <th>ID</th>
        <th>Tên truong</th>
        <th>Địa chỉ</th>
        <th>Logo</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($schools as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->logo}}</td>
                <td>
                    <a href="{{BASE_URL.'schools/sua/'.$item->id}}">Update</a>
                    <a href="{{BASE_URL.'schools/xoa/'.$item->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>