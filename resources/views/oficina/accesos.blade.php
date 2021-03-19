@extends('layouts.appmenu')

@section('content')
<b-container fluid>
    <b-row align-h="center">
        <b-col cols="12">
            <b-card title="Personal de la Oficina" class="my-3">
                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @endif

                <b-button variant="primary" href="{{ url('/oficina/nuevo') }}">
                <b-icon icon="file-earmark"></b-icon>
                Nuevo Personal
                </b-button>

                 <pager-component>
                </pager-component>
                <table-personal-component class="mt-2">
                </table-personal-component>
                <pager-component>
                </pager-component>
                

            </b-card>
        </b-col>
    </b-row>
</b-container>


</script>

@endsection

