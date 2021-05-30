@extends('layouts.app')


@section('content')

   
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-accent-danger">
                <div class="card-header">Diagram Chord</div>
                <div class="card-body">
                    <div class="col-md-10" id="chord-diagram">
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10" id="chord-diagram">
                <div id="chart"></div>
                <div id="clickerWrapper">
                    <div id="progress"></div>
                    <div id="clicker">
                        Commençons</div>
                </div>
                <div id="buttonWrapper">
                    <div id="buttonWrapperInner">
                        <div id="skip" class="sideButton">SAUTER L'INTRO
                        </div>
                        <div id="reset" class="sideButton">RÉINITIALISER</div>
                    </div>
                </div>
            </div>
        </div>
@endsection
