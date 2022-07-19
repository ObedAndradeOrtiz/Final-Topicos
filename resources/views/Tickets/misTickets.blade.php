@extends('Layouts.dashboard')
@section('content')

<div class="container-xl px-4 mt-4">
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="" target="__blank">E-Tickets y Consumos</a>
    </nav>
<hr class="mt-0 mb-4">
    <div class="col" id="myTable">
        <!-- Account details card-->
        <div class="card">
            <div class="card-header">Detalles de Mis Tickets</div>
            <div class="card-body">
                <form>
                    <!-- Form Row-->
                    <div class="row gx-3">
                        <!-- Form Group (first name)-->
                        <!-- Form Group (last name)-->
                        <div class="col">
                            <label class="small mb-1" for="inputLastName">Evento</label>
                        </div>
                        <div class="col">
                            <label class="small mb-1" for="inputLastName"># de Ticket</label>  
                        </div>
                        <div class="col">
                            <label class="small mb-1" for="inputLastName">Area</label>  
                        </div>
                        <div class="col">
                            <label class="small mb-1" for="inputLastName">Fecha Comprada</label>
                        </div>
                        <div class="col">
                            <label class="small mb-1" for="inputLastName">Estado</label>
                        </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        @foreach ($tickets as $ticket)
                        @if($ticket->id_user==$user->id)
                        <!-- Form Group (first name)-->
                        <div class="col">
                            <label class="" for="inputFirstName">{{$ticket->name_event}}</label>
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col">
                            <label class="small mb-1" for="inputLastName">{{$ticket->id}}</label>  
                        </div>
                        <div class="col">
                            <label class="small mb-1" for="inputLastName">{{$ticket->name_area}}</label>  
                        </div>
                        <div class="col">
                            <label class="small mb-1" for="inputLastName">{{$ticket->created_at}}</label>
                        </div>
                        <div class="col">
                         
                            <label class="small mb-1" for="inputLastName">Vigente</label>
                           
                        </div>
                        <hr class="mt-0 mb-4">
                        @endif
                        @endforeach
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection