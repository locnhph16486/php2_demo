<form method="post" action="">
    <p>
        Ten truong : <input value="{{$model->name}}" type="text" name="name">
    </p>
    <p>
        Dia chi : <input value="{{$model->address}}" type="text" name="address">
    </p>
    <p>
        Logo: <input value="{{$model->logo}}" type="text" name="logo">
    </p>
    <button type="submit">Update</button>
</form>