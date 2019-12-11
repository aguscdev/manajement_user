
{{Auth::user()->name}} - {{Auth::user()->user_role}}
<ul>
	<li>Home</li>
	@if(Auth::user()->user_role=="officer" || Auth::user()->user_role=="administrator")
	<li>Officer</li>
	<li>User</li>
	@elseif(Auth::user()->user_role=="user")
	<li>User</li>
	@endif
</ul>

<a href="{{url('/logout')}}">logout</a>