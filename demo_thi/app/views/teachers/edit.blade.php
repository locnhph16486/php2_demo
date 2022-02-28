<form action="" method="post">
    <p>
        Name : <input value="{{$teacher->name}}" type="text" name="name">
    </p><p>
        Gender : <br>
        Nam : <input type="checkbox" name="gender" value="1" id="">
        Nua : <input type="checkbox" name="gender" value="2" id="">
    </p><p>
        Truong : <select name="school_id" id="">
            @foreach ($school as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Salary : <input value="{{$teacher->salary}}"  type="number" name="salary">
    </p>
    <button type="submit">ADD</button>
</form>