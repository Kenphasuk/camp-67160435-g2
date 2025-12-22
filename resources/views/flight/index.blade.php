@extends('template.default')

@section('header1', 'Flight Data')
@section('content')
     <div class="row">
        <div class="mt-3 col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Airline</th>
                        <th scope="col">Number of Planes</th>
                        <th scope="col">Price per Ticket</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flights as $flight)
                    <tr>
                        <td>{{ $flight->id }}</td>
                        <td>{{ $flight->name }}</td>
                        <td>{{ $flight->airline }}</td>
                        <td>{{ $flight->number_of_planes }}</td>
                        <td>{{ $flight->price_per_ticket }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
