@include('layouts.header')
    
    @if(is_null(Request::get('host')) && is_null(Request::get('tag')))
        <h3>Logged events for all Hosts</h3>
    @endif

    @if(is_null(Request::get('host')) && !is_null(Request::get('tag')))
        <h3>Logged events for all Hosts, tagged as "{{ Request::get('tag') }}"</h3>
    @endif

    @if(is_null(Request::get('tag')) && !is_null(Request::get('host')))
        <h3>Logged events for host "{{ Request::get('host') }}"</h3>
    @endif

    @if(!is_null(Request::get('host')) && !is_null(Request::get('tag')))
        <h3>Logged events for host "{{ Request::get('host') }}", tagged as "{{ Request::get('tag') }}"</h3>
    @endif
   
    @include("components.eventList")




@include('layouts.footer')