<form action="{{asset('create-success')}}" method="post">
{{csrf_field()}}
<input type="text" name="ten">
<input type="text" name="email">
<button type="submit">submit</button>
</form>