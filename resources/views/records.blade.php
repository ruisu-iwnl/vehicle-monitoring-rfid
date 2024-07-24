@extends('layout-dashboard')

@section('title', 'Record List')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">table read only</h1>
        <p class="text-lg text-gray-700">time in/ out button</p>
        <p class="text-lg text-gray-700">add pagination to the table max of 5 pages</p>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">time in/ time out </h2>
            <!-- <ul class="list-disc pl-5">
                <li class="mb-2">vehicle utilization analysis: bar chart of timeinout frequency</li>
                <li class="mb-2">peak usage times: heatmap showing timeinout patterns throughout the day</li>
                <li class="mb-2">duration of stay: histogram displaying the distribution of vehicle stay durations</li>
                <li class="mb-2">frequent visitors: pie chart showing proportion of different vehicles' entry counts</li>
                <li class="mb-2">daily/weekly trends: line chart daily or weekly vehicle entry and exit</li>
            </ul> -->
        </div>
    </div>
@endsection
