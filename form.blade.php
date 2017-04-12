<HTML>

	<form action="{{ url('/')}}?foo=get&baz=get" method="POST"> 
		{{ csrf_field() }}
		<input type="hidden" name="foo" value="bar"/> 
		<input type="text" name="baz"/>
		<input type="submit" value="Send" /> 
	</form>
	
	<h1> TORNA INDIETRO </h1>

</HTML>
