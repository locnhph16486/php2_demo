{{var_dump(time())}}
<form method="post">
    <p>
        Ten truong : <input type="text" name="name">
    </p>
    <p>
        Dia chi : <input type="text" name="address">
    </p>
    <p>
        <input type="hidden" name="created_at" value="{{time()}}">
    </p>
    <button type="submit">ADD</button>
</form>