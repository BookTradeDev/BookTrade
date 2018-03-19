@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Books for Trade</h1>
                <form action='store' method='POST'>


                    <div class='form-group'>
                        <table>
                            <tr style="padding: 5px">
                                <td style="padding: 5px">
                                    <input type='text' name='isbn' id='isbn' placeholder="ISBN">
                                </td>
                                <td style="padding: 5px">
                                    <input type="text" name="title" id="title" placeholder="Title">
                                </td>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <td style="padding: 5px">
                                    <select name="book_condition" id="book_condition" placeholder="Condition">
                                        <option value="good">Good</option>
                                        <option value="fair">Fair</option>
                                        <option value="poor">Poor</option>
                                    </select>
                                </td>
                            </tr>

                        {{--<td>--}}
                        {{--<input type="text" name="author" id="author" placeholder="Author">--}}
                        {{--</td>--}}


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
                        <button type="submit" id="submit" class="btn btn-default">Add Book</button>
                    </div>
@endsection
