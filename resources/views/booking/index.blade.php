


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
  
  <div class="container pt-3">
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissable">
        {{ session()->get('message') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
  @endif
  
  <button><a href={{route('booking/create')}} class="btn btn-success">ADD Booking</a></button>&nbsp;
  
  
  
    <table class="table table-striped">
      <thead>
        <tr>
        <th> Select_city</th>
        <th>  Select_vehical</th>
        <th> Date</th>
        <th> Booking_type</th>
        <th> Half</th>
        <th> From</th>
        <th> To</th>
        <th> Text</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($data as $d)
        <tr>
        <td>{{$d->select_city}}</td>
          <td>{{$d->select_vehical}}</td>
            <td>{{$d->date}}</td>
              <td>{{$d->booking_type}}</td>
              <td>{{$d->half}}</td>
              <td>{{$d->from}}</td>
              <td>{{$d->to}}</td>
              <td>{{$d->text}}</td>
            
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  </body>
  <script type="text/javascript">
  
  </script>
  </html>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>
  
  
  
  
  
  
        
  
  
  
  
  
  
      