@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

             
            <b-card title="Prueba autocomplete" class="my-3">


                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @else
                    <b-alert show>
                        Por favor ingrese su búsqueda:
                    </b-alert>
                @endif
                
                <div> 

                <autocom-wiki-component>
                /<autocom-wiki-component>

            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection