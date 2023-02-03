@extends('layouts.app')

@section('title', 'Self system')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        @if (isset($form))
            <h1 class="display-4 mb-4">{{ $form->getTitle() }}</h1>
            <form action={{ $form->getSubmitAction() }} method="post">

                @foreach($form->getBodyElements() as $element)
                    <div class="mb-3">
                        <div class="input-group">
                            <input type={{ $element['type'] }} class="form-control" name={{ $element['name'] }} placeholder={{ $element['placeholder'] }}>
                        </div>
                    </div>
                @endforeach

                <button class="btn btn-primary btn-lg btn-block" type="submit">{{ $form->getTitle()  }}</button>
            </form>
        @else
            <h1 class="display-4">Welcome</h1>
        @endif
    </div>
@endsection
