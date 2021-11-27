@extends('layouts.master')
@section('content')
    <div class="title m-b-md" style="margin-top: 200px !important;">
        Add New Laptop
    </div>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name">
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="exampleFormControlSelect1">Example select</label>--}}
{{--            <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                <option>1</option>--}}
{{--                <option>2</option>--}}
{{--                <option>3</option>--}}
{{--                <option>4</option>--}}
{{--                <option>5</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="exampleFormControlSelect2">Example multiple select</label>--}}
{{--            <select multiple class="form-control" id="exampleFormControlSelect2">--}}
{{--                <option>1</option>--}}
{{--                <option>2</option>--}}
{{--                <option>3</option>--}}
{{--                <option>4</option>--}}
{{--                <option>5</option>--}}
{{--            </select>--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Brand</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="brand" placeholder="Brand">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="number" step="0.1" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
