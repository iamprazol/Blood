@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="card col-lg-4 col-md-6  mb-4 sm-hidden">

        

            <h4 class="card-header">
                Blood Groups
            </h4>

            <div class="card-body">

                <ul class="list-group">

                    @foreach($groups as $group)

                        <li class="list-group-item">

                            {{ $group->b_group }}

                        </li>

                        @endforeach

                </ul>

            </div>
        </div>


        <div class="row mb-4 col-lg-6">



            @foreach($requests as $request)

                <div class="card">

                    <div class="card-header">


                        <span><img class="card-img-top" src="{{ $requests->user->avatar }}"/>  {{ $requests->created_at->diffForHumans() }}</span>

                    </div>

                    <div class="card-body">

                        <p class="text-center">

                            {{ $requests->contents }}

                        </p>

                    </div>

                    <div class="card-footer">

                        <span>

                            {{ $requests->required_till }}

                        </span>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@endsection
