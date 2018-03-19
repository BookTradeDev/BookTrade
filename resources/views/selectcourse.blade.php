@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Books for Trade</h1>
                <form action='look' method='POST'>


                    <div class='form-group'>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <select class="form-control input-lg" name="select_course" id="select_course" placeholder="select course">
                                        <option value="" disabled selected>Select course...</option>
                                        {{--<option value="bio181">BIO181</option>--}}
                                        {{--<option value="ift100">IFT100</option>--}}
                                        {{--<option value="ift200">IFT200</option>--}}
                                        {{--<option value="tmc330">TMC330</option>--}}
                                    </select>
                        <button type="submit" id="submit" class="btn btn-default">Find Textbook</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
