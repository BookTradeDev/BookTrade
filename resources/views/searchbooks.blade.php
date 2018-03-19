@extends('layouts.app')

@section('content')
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <div class="container">
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="Search Listings"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
            </div>
        </form>
    </div>
    <div class="container">
        @if(isset($listings))
            <h2>Book Listings</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listings as $dummy)
                    <tr>
                        <td>{{$dummy->isbn}}</td>
                        <td>{{$dummy->title}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $listings->render() !!}@endif
    </div>
    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>Sample Listings</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $listing)
                    <tr>
                        <td>{{$listing->isbn}}</td>
                        <td>{{$listing->title}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @if($details){!! $details->render() !!}@endif
        @elseif(isset($message))
            <p>{{ $message }}</p>
    @endif







{{--from laracasts simple search tutorial(not working)--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--<h1>Search Books</h1>--}}
    {{--{{Form::open(['method'=>'GET'])}}--}}
    {{--{{form::input('search', 'q', null, ['placeholder' => 'Search...'])}}--}}
    {{--{{form::close()}}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    @endsection