@extends('layouts.app')
{{-- om de layout te laden --}}

@section('title', 'Homepagina')

@section('content')

    <div class="m-4 font-mono">
        @section('page-title', 'Welkom op de Homepagina')
    </div>
    <div class="grid grid-cols-2 ">
        <div class="object-contain m-4 p-2">
            <img src="https://iveybusinessjournal.com/wp-content/uploads/2006/03/iStock_000012204568_Large.jpg"
                alt="img of employee">
        </div>
        <div class="object-contain m-4 p-2">
            <img class="h-70" src="https://www.isonharrison.co.uk/wp-content/uploads/2021/11/Employees-scaled.jpg" alt="">
        </div>
    </div>

    <div class="m-4 font-mono">
        <p class="p-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus sit amet ligula commodo faucibus.
            Phasellus eget sapien vitae ligula efficitur scelerisque. Curabitur ut urna vel turpis placerat convallis.
            Integer in lectus sit amet nulla sollicitudin luctus. Vivamus auctor, nisl at consequat cursus, justo lorem
            interdum justo,
            in fermentum odio lacus sed sapien. Fusce id libero ut mauris fermentum consequat.
        </p>

        <p class="p-2">
            Mauris sit amet diam eu lorem cursus lacinia. Donec mattis ex vitae sapien sollicitudin, a porta elit blandit.
            Nullam a dolor nec nisi tincidunt sagittis. Praesent at eros non justo fermentum volutpat.
            Etiam ac lacus id arcu vestibulum feugiat. Sed ut erat eget nisl consectetur volutpat at a purus.
        </p>
    </div>
@endsection
