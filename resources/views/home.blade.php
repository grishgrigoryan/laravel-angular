@extends('layouts.app')

@section('content')
    <div flex layout="column" tabIndex="-1" role="main" class="md-whiteframe-z2" ng-controller="HeaderController as header">
        <md-toolbar layout="row" class="md-whiteframe-z1">
            <md-button class="menu md-raised" ng-hide="isActive('/active')"  ng-click="toggleHash('/active')">
                Active
            </md-button>
            <md-button class="menu md-raised"   ng-hide="isActive('/dashboard')"  ng-click="toggleHash('/dashboard')">
                History
            </md-button>
        </md-toolbar>
        <md-content flex id="content"  ng-view >
        </md-content>
    </div>
@endsection
