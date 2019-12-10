
{{Auth::user()->name}} - {{Auth::user()->level}}
<ul>
	<li>Home</li>
	@if(Auth::user()->level=="manager" || Auth::user()->level=="admin")
	<li>Manager</li>
	<li>Supervisor</li>
	<li>Operator</li>
	@elseif(Auth::user()->level=="supervisor")
	<li>Supervisor</li>
	<li>Operator</li>
	@elseif(Auth::user()->level=="operator")
	<li>Operator</li>
	@endif
</ul>

<a href="{{url('/logout')}}">logout</a>