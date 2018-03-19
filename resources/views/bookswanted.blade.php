@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Books Wanted</h1>
                <form action='wanted' method='POST'>
                    <div class='form-group'>
                        <table>
                            {{--<input type='text' name='isbn' id='isbn' placeholder="ISBN">--}}
                            <input type="text" name="isbn[]" placeholder="enter isbn...">
                            <input type="text" name="isbn[]" placeholder="enter isbn...">
                            <input type="text" name="isbn[]" placeholder="enter isbn...">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">



                            <!--
                            <tr>
                                <td>
                                    <label for='isbn2'>2.</label>
                                    <input type='text' name='isbn2' id='isbn2' placeholder="ISBN">
                                </td>
                                <td>
                                    <input type="text" name="title2" id="title2" placeholder="Title">
                                </td>
                                <td>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <label for='isbn3'>3.</label>
                                    <input type='text' name='isbn3' id='isbn3' placeholder="ISBN">
                                </td>
                                <td>
                                    <input type="text" name="title3" id="title3" placeholder="Title">
                                </td>
                                <td>

                                </td>

                            </tr>
                            -->
                        </table>
                        <button type="submit" id="submit" class="btn btn-default">Add books</button>
                    </div>
@endsection
