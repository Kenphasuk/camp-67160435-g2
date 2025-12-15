@extends('template.default')
@section('title', 'My Controller')
@section('header1', 'My View')

@section('content')
    <form action="#" method="post">
        @csrf
        <label for="num">ป้อนข้อมูลแม่สูตรคูณ:</label>
        <input type="number" id="num" name="num" required>
        <button type="submit">ส่งข้อมูล</button>
    </form>
@endsection


