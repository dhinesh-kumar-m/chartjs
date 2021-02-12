<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    ...
    {{-- ChartScript --}}
    @if($usersChart)
    {!! $usersChart->script() !!}
    @endif
</head>
<body>
<h1>Sales Graphs</h1>

<div style="width: 50%">
    
    
    
    
    
    
    
    
    
    
    {!! $salesChart->container() !!}
</div>
</body>
<h1>Users Graphs</h1>

<div style="width: 50%">
    {!! $usersChart->container() !!}
</div>
</html>